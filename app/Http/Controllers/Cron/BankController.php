<?php

namespace App\Http\Controllers\Cron;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankController extends Controller
{
    public function getInfoBank()
    {
       return config('bank');
    }

    public function callApiHistoryBank($infoBank)
    {
       // call api bank
    }

    public function updateCashBank()
    {
       $dataBank = $this->getInfoBank();
       foreach( $dataBank as $name => $infoBank ){
           $returnHistoryBank = $this->callApiHistoryBank($infoBank);
           // xử lý data rồi update user
           dump("xử lý data rồi update user");
         //return true;
       }
    }

}
