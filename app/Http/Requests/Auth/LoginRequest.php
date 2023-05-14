<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
        $recaptchaRule = env('RECAPTCHA') == 'ON' ? 'required|recaptcha' : '';
        return [

            'realname' => [
                'required',
            ],
            'password' => 'required',
            'g-recaptcha-response'=> $recaptchaRule

        ];
    }
    public function messages() {
        return [
            'realname.required' => 'Tài khoản không được để trống',
            'password.required' => 'mập khẩu không được để trống',
            'g-recaptcha-response.required' => 'Tôi không phải người máy',
        ];
    }
    
}
