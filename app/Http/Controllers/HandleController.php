<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\PlayPoint;
use App\Models\PlayUserName;
use App\Models\TransLogRetract;
use Illuminate\Http\Request;
use App\Models\trans_log;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class HandleController extends Controller
{
    // Thông tin chung
    public function index(){
        return view('page.screen.commonInfo' , []);
    }

    // Đổi mật khẩu
    public function changePassword(){
        return view('page.screen.changePassword' , []);
    }


    public function Withdrawal(Request $request){
        $moneyAfter = (int)Auth::user()->cash - (int)$request->money;
        if((int)Auth::user()->cash >= (int)$request->money){
        $user = User::find(Auth::user()->id);
        if($user != null){
            $user->cash = (int)$moneyAfter;
            $userGame = PlayUserName::where('username', $request->username)->first(); 
            if($userGame == null){ 
                return redirect()->back()->with('warning', 'Bạn cần đăng nhập vào game lần đầu !');
            }
            try {
                DB::beginTransaction();
                    User::update(['cash'=> (int)$moneyAfter]); 
                    $pointCurrent = PlayPoint::where('uuid' , $userGame->uuid)->first();
                    if($pointCurrent){
                        PlayPoint::update(['points'=>(int)$pointCurrent->points + (int)$request->money]);
                    }else{
                        PlayPoint::create([
                            "uuid"=>$userGame->uuid,
                            'points'=>(int)$request->money]);
                    }
                    TransLogRetract::create([
                        "username" => $request->username,
                        "points" => $request->money,
                        "user_id" => Auth::user()->id,
                    ]);
                DB::commit();
                    return redirect()->back()->with('success', 'Rút vật phẩm thành công !');
            } catch (Exception  $th) {
                return redirect()->back()->with('error', 'Lỗi không rút được !');
            }
        }else{
            DB::rollBack();
            return redirect()->back()->with('error', 'Tên tài khoản không đúng !');
        }
      }
      return redirect()->back()->with('error', 'Tài khoản của bạn không đủ!');
    }

    public function historyRetract(){
        $history = TransLogRetract::where('user_id' , Auth::user()->id)->get();
        return view('page.screen.historyRetract' , compact('history'));
    }

    // Trang Rút vật phẩm
    public function pageWithdrawal(){
        return view('page.screen.withdrawal' , []);
    }

     // Trang Rút vật phẩm
     public function historyRecharge(){
        $datas = trans_log::where('name',auth()->user()->realname)->orderBy('date', 'DESC')->take(10)->get();
        return view('page.screen.historyRecharge' ,  compact('datas'));
    }
}
