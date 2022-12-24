<?php

namespace App\Http\Controllers;
use App\Models\trans_log;
use Illuminate\Http\Request;

class CashHistoryController extends Controller
{
    private $trans_log;

    public function __construct(trans_log $trans_log)
    {
        $this->trans_log = $trans_log;
    }

    public function cardRchargeHistory (){
       $datas = $this->trans_log->where('name',auth()->user()->realname)->orderBy('date', 'DESC')->take(10)->get();
      // dd($data,auth()->user());
      return view('page.screen.cashRecharge',compact('datas'));
    }
}
