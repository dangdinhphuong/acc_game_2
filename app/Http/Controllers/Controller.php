<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Product_tag;
use App\Models\Authme;
use App\Mail\Auth\EmailVerification;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    private $CHARS;
 
    private static function initCharRange() {
        return array_merge(range('0', '9'), range('a', 'f'));
    }

    protected function hashSHA256($password,$salt="") {
        if($salt =="" ){
            $salt = $this->generateSalt();
        }
        $data = [
            'pass'=> '$SHA$' . $salt . '$' . hash('sha256', hash('sha256', $password) . $salt),
            'salt'=> $salt
        ];
        return $data;
    }

    /**
     * @return string randomly generated salt
     */
    private function generateSalt() {
        $this->CHARS = $this->initCharRange();
        $maxCharIndex = count($this->CHARS ) - 1;
        $salt = '';
        for ($i = 0; $i < env('SALT_LENGTH', 16); ++$i) {
            $salt .= $this->CHARS[mt_rand(0, $maxCharIndex)];
        }
        return $salt;
    }


    protected function getUserIpAddr()
    {
        if(!empty($_SERVER['HTTP_CLIENT_IP'])){
            //check ip from share internet
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        }else if(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
            //to check ip is pass from proxy
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }else{
            $ip = $_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }


    public function SendEmail($data)
    {
        Mail::to($data['emailTo'])->send(new EmailVerification($data));
        return true;
    }
    function randomPassword()
    {
        $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890@$!%*?&_()^#';
        $pass = array(); //remember to declare $pass as an array
        $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
        for ($i = 0; $i < 10; $i++) {
            $n = rand(0, $alphaLength);
            $pass[] = $alphabet[$n];
        }
        return implode($pass); //turn the array into a string
    }
}
