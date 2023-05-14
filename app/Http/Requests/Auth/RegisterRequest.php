<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPasswordRule;
use App\Rules\CheckRealnameRule;
class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'realname' => [
                'required',
                 new CheckRealnameRule(),
                'unique:mysql_user.authme',
                
            ],
            'email' => 'required|email|max:100|unique:mysql_user.authme',
            'password' => [
                'required',
                'confirmed',
                new CheckPasswordRule(),
            ],
           // 'g-recaptcha-response'=>'required|recaptcha'

        ];
    }
    public function messages() {
        return [
            'realname.required'  => 'Mời nhập tên tài khoản !',
            'realname.unique'    => 'Tên tài khoản đã tồn tại !',
            'email.required'  => 'Mời nhập email !',
            'email.unique'    => 'Email  đã tồn tại !',
            'password.required'  => 'Mời nhập mật khẩu !',
            'password.confirmed' => 'Mật khẩu nhập lại không khớp mật khẩu!',
            'g-recaptcha-response.required' => 'Tôi không phải người máy',
            'g-recaptcha-response.recaptcha' => 'Tôi không phải người máy'
        ];
    }
    
}
