<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\Auth\RegisterRequest;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\ChangePassword;
use App\Mail\Auth\EmailVerification;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redis;
use  App\Models\PlayPoint;

class AuthController extends Controller
{
    // số lần thực hiện
    protected $maxAttempts = 3;
    // thời gian tạm nghưng là 1 ngày
    protected $decayMinutes = 86400;

    private $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }



    protected function hash($string)
    {
        return hash('sha256', $string . config('app.encryption_key'));
    }

    protected function checkAccount($realname, $password)
    {
        $user = User::where('realname', $realname)->first();
        $salt = $user->salt;
        if(!isset($user->salt)|| empty($user->salt) || $user->salt == null){
            $salt = substr((string)$user->password,5,16);
            $user->update(['salt' =>$salt]);
        }

        if ($user && !empty($user->id)) {
            $passwordHash = $this->hashSHA256($password, $salt);
            if ($passwordHash['pass'] === $user->password) {
                return $user;
            }
        }
        return false;
    }
    public function login_get()
    {
        return view('page.auth.login');
    }

    public function register_get()
    {
        return view('page.auth.register');
    }

    public function resetPass()
    {
        return view('page.auth.resetPassword');
    }

    public function resetPassPost(Request $request)
    {
        $request->validate(
            [
                'realname' => 'required|exists:mysql_user.authme',
            ],
            [
                'realname.required'  => 'Mời nhập tên tài khoản !',
                'realname.exists'    => 'Tên tài khoản không tồn tại!',
            ]
        );
        if (isset($request->realname) && !empty($request->realname)) {
            // tạo key để nhớ số lần giửi email quên pas : key ==> resetPassPost|PHUONG0398|127.0.0.1:8000
            $key = "resetPassPost|" . $request->realname . '|' . $this->getUserIpAddr();
            // kiểm tra xem giửi email đã quá 3 lần  . nếu quá 3 lần ko cho giửi , nếu chưa quá 3 lần thì bỏ qua if
            if (RateLimiter::tooManyAttempts($key, $this->maxAttempts)) {
                return redirect()->back()->with('error', "Bạn đã giửi yêu cầu quá số lần trong ngày");
            }
            // khi đăng nhập sai ta dùng hit để tăng số lần đăng nhập sai
            RateLimiter::hit($key, $this->decayMinutes);
            $user = User::where('realname', $request->realname)->first();

            if (!$user) {
                return redirect()->back()->with('error', "Tài khoản Không tồn tại !");
            } else if (isset($user->email) && !empty($user->email)) {
                $token = $this->hash($this->randomPassword());
                $data = [
                    'token' => $token,
                    'subject' => "Xác nhận đặt lại tài khoản ",
                    'view' => "page.email.emailResetPassword",
                    'emailTo' => $user->email
                ];
                $this->SendEmail($data);
                $user->update([
                    'status' => 1, // kích hoạt tài khoản
                    'token' => $token,
                ]);

                RateLimiter::clear($key); // xóa key
                return redirect()->route('login')->with('success', ' Yêu cầu đã giửi thành công vui lòng kiểm tra email đã đăng ký !');
            }
            return redirect()->back()->with('error', "Tài khoản chưa cập nhật email, không thể thực hiện chức năng !");
        }

        return redirect()->back();
    }

    public function getAccount($token)
    {

        $user = User::where('token', $token)->first();
        if (isset($user->id) && !empty($user->id)) {
            $password =  $this->randomPassword();
            $user->update([
                'status' => 1, // kích hoạt tài khoản
                'token' => "",
                'password' =>  $this->hashSHA256($password, $user->salt)['pass'],
            ]);
            $data = [
                'realname' => $user->realname,
                'password' => $password,
                'subject' => "Thông tin tài khoản ",
                'view' => "page.email.emailGetAccount",
                'emailTo' => $user->email
            ];
            $this->SendEmail($data);
            return  redirect()->route('login')->with('success', 'Vui lòng kiểm tra email để lấy thông tin đăng nhập !');
        }
        return  redirect()->route('login')->with('error', 'Token hết hạn hoặc không đúng  !');
    }

    public function register(RegisterRequest $request)
    {
        try {
            DB::beginTransaction();
            $passHash = $this->hashSHA256(($request->password));
            $user = $this->user->create([
                'email' => $request->email,
                'realname' => $request->realname,
                'username' => $request->realname,
                'password' => $passHash['pass'],
                'regip' => $this->getUserIpAddr(),
                'cash' => 5000,
                'status' => 1, // kích hoạt,
                'token' => "",
                'salt' => $passHash['salt']
            ]);
            DB::commit();
            return redirect()->route('login')->with('success', "Đăng ký tài khoản thành công");
        } catch (Exception $exception) {
            DB::rollBack();
            return redirect()->back()->with('error', "Đăng ký thất bại !");
        }
    }

    public  function store(LoginRequest $request)
    {
        $user = $this->checkAccount($request->realname, $request->password);
        if (!$user || empty($user->id)) {
            return redirect()->back()->with('error', "Tài khoản hoặc mật khẩu không hợp lệ !");
        }

        if ($user->status == $this->user::DISABLE_ACCOUNT) {
            auth()->logout();
            return redirect()->back()->with('error', "Tài khoản của bạn đã bị vô hiệu hóa !");
        } else if ($user->status == $this->user::NO_ACTIVE_ACCOUNT) {
            auth()->logout();
            return redirect()->back()->with('error', "Tài khoản của bạn chưa được kích hoạt !");
        }
        Auth::loginUsingId($user->id);
        Log::info("Đăng nhập :" . auth()->user()->realname . "| ip: " . request()->ip());
        return redirect()->route('profile')->with('success', "Đăng nhập tài khoản thành công !");
        return true;
    }

    public function logout()
    {
        // kiểm tra xem đã đăng nhập chưa . nếu đăng r thì logout . còn chưa thì về quay về trang login
        auth()->logout();
        return redirect()->route('login')->with('success', ' Thoát tài khoản thành công');
    }

    public function changePassword()
    {
        return view('page.screen.changePassword');
    }

    public function changePasswordPost(ChangePassword $request)
    {
        $user = $this->checkAccount(auth()->user()->realname, $request->current_password);

        if (isset($user->id) && !empty($user->id)) {
            $user = $user->update([
                'password' => $this->hashSHA256($request->password, $user->salt)['pass']
            ]);
            $this->logout();
            return redirect()->back()->with('success', 'Đổi mật khẩu thành công !');
        }
        return redirect()->back()->with('error', 'Đổi mật khẩu thất bại !');
    }

    public function profile()
    {
        $points =   PlayPoint::join('playerpoints_username_cache', 'playerpoints_points.uuid', 'playerpoints_username_cache.uuid')
            ->where('playerpoints_username_cache.username', Auth::user()->realname)->first();

        $points =  $points ? $points->points : 0;
        return view('page.screen.commonInfo', compact('points'));
    }

    public function activeAccount($token)
    {

        $user = User::where('token', $token)->first();

        if (isset($user->id) && !empty($user->id) && $user->status == 2) {
            $user->update([
                'status' => 1, // kích hoạt tài khoản
                'token' => "",
            ]);
            Auth::loginUsingId($user->id);
            return  redirect()->route('profile')->with('success', 'Kích hoạt tài khoản thành công !');
        }
        return  redirect()->route('login')->with('error', 'Kích hoạt tài khoản thất bại !');
    }

    public function updateEmail(Request $request)
    {
        $this->validate(
            request(),
            [
                'email' => 'required|email|unique:mysql_user.authme,email,' . auth()->user()->id,
            ],
            [
                'email.required' => 'Bạn chưa nhập email',
                'email.email' => 'Email không đúng định dạng',
                'email.unique' => 'Email đã được sử dụng',
            ]
        );
        $user = User::where('realname', auth()->user()->realname)->first();

        if (isset($user->id) && !empty($user->id)) {
            $user = $user->update([
                'email' => $request->email
            ]);
            return redirect()->back()->with('success', 'Đổi email thành công !');
        }
        return redirect()->back()->with('error', 'Đổi email  thất bại !');
    }
}
