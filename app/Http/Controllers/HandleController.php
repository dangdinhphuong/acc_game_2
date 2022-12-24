<?php

namespace App\Http\Controllers;
use App\Models\Authme;
use App\Models\PlayPoint;
use App\Models\PlayUsername;
use App\Models\TransLogRetract;
use Illuminate\Http\Request;
use App\Models\trans_log;
use Exception;
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
        $user = Authme::find(Auth::user()->id);
        $isCheckUsername = Authme::where('realname' , $request->username)->get();
        if(count($isCheckUsername) > 0){
            $user->cash = (float)$moneyAfter;
            $userGame = PlayUsername::where('username', $request->username)->get();
            try {
                if(count($userGame) > 0){
                    $user->save(); 
                    $pointCurrent = PlayPoint::where('uuid' , $userGame[0]->uuid)->get();
                    $pointRow =PlayPoint::find($pointCurrent[0]->id);
                    $pointRow->points = (int)$pointCurrent[0]->points + (int)$request->money;
                    $pointRow->save();
                    TransLogRetract::create([
                        "username" => $request->username,
                        "points" => $request->money,
                        "user_id" => Auth::user()->id,
                    ]);
                    return redirect()->back()->with('success', 'Rút vật phẩm thành công !');
                }else{
                    return redirect()->back()->with('warning', 'Bạn cần đăng nhập vào game lần đầu !');
                }
                
            } catch (Exception  $th) {
                return redirect()->back()->with('error', 'Lỗi không rút được !');
            }
        }else{
            return redirect()->back()->with('error', 'Tên tài khoản không đúng !');
        }
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
