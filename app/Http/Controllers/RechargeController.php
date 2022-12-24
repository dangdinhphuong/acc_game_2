<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RechargeRequest;
use Illuminate\Support\Facades\RateLimiter;
use App\Models\trans_log;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Exception;
use Carbon\Carbon;
use App\Models\User;

class RechargeController extends Controller
{

    // số lần thực hiện 
    protected $maxAttempts = 1;
    // thời gian tạm nghưng là 1 ngày
    protected $decayMinutes = 60;

    public function recharge(RechargeRequest $request)
    {
        $key = "recharge|" . $request->code . '|' . $this->getUserIpAddr();
        $cash = trans_log::where('seri', $request->serial)->where('pin', $request->code)->first();
        if (RateLimiter::tooManyAttempts($key, $this->maxAttempts)) {
            return redirect()->back()->with('error', "Bạn đã nạp thẻ quá nhanh vui lòng chờ 1p để thử lại nếu không sẽ bị khóa");
        }
        RateLimiter::hit($key, $this->decayMinutes);
        if (env('MAINTENANCE_RECHARGE') == true) {
            return redirect()->back()->with('error', "Chức năng nạp thẻ đang bảo trì . Vui lòng thử lại sau");
        } elseif (auth()->check() && auth()->user()->status != 1) {
            return redirect()->back()->with('error', "Tài khoản đang bị chặn ,Vui lòng liên hệ với admin");
        } elseif (isset($cash->name)) {
            return redirect()->back()->with('error', "Thẻ cào này đã tồn tại trên hệ thống");
        } else {
            RateLimiter::clear($key); // xóa key
            $partner_id = env('PARTNER_ID_CASH', "#");
            $partner_key = env('PARTNER_KEY_CASH', "#");
            $sign = md5($partner_key . $request->code . $request->serial);
            $request_id = rand(100000000, 999999999);
            $date = Carbon::now();;
            $obj = $this->recharge_payin($partner_id, $request->type, $request->amount, $request->code, $request->serial, $request_id, $sign);
            Log::info("Nạp thẻ :" . auth()->user()->realname . "|" . $request->type . "| status: " . $obj['status'] . "| ip: " . $this->getUserIpAddr() . "| seri: " . $request->serial . "| code: " . $request->code . "| amount: " . $request->amount. "| status: " . $obj['status']);
            
            if ($obj['status'] == 100) {
                try {
                    DB::beginTransaction();
                    $amount = (float)auth()->user()->cash + (float)$request->amount;
                    trans_log::create([
                        "name" => auth()->user()->realname,
                        "seri" => $request->serial,
                        "pin" => $request->code,
                        "type" => $request->type,
                        "date" => $date,
                        "amount" => $request->amount,
                        "status" => 1,
                        "trans_id" => $obj['trans_id']
                    ]);
                    User::where("id", auth()->user()->id)->update([
                        'cash' =>  $amount,
                    ]);
                    DB::commit();
                    return redirect()->back()->with('success', "Nạp thẻ thành công - vui lòng chờ 30s - 1p duyệt ");
                } catch (Exception $exception) {
                    DB::rollBack();
                    return redirect()->back()->with('error', "Nạp thẻ bị lỗi xin vui lòng liên hệ với admin để được hỗ trợ ");
                }
            } else if ($obj['status'] == 2) {
                return redirect()->back()->with('error', "Thẻ nạp sai mệnh giá ");
            } else if ($obj['status'] == 3) {
                return redirect()->back()->with('error', "Thẻ nạp lỗi ");
            } else if ($obj['status'] == 4) {
                return redirect()->back()->with('error', "Hệ thống thẻ nạp đang bảo trì ");
            } else {
                return redirect()->back()->with('error', "Nạp thẻ thất bại");
            }
        }

        // 2: Thẻ thành công sai mệnh giá
        // 3: Thẻ lỗi
        // 4: Hệ thống bảo trì
        // 99: Thẻ chờ xử lý
        // 100: Gửi thẻ thất bại - Có lý do đi kèm ở phần thông báo trả về
    }

    protected function recharge_payin($partner_id, $type, $amount, $code, $serial, $request_id, $sign)
    {
        $response = Http::post('https://trumthe.vn/chargingws/v2', [
            "telco" => $type,

            "code" => $code,

            "serial" => $serial,

            "amount" => $amount,

            "request_id" => $request_id,

            "partner_id" => $partner_id,

            "sign" => $sign,

            "command" => "charging",

        ]);

        return json_decode($response, true);
        // return $response;
    }
}
