<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\CheckPasswordRule;
class ChangePassword extends FormRequest
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
            'current_password' => 'required',
            'password' => [
                'required',
                'confirmed',
                new CheckPasswordRule(),
            ],
        ];
    }
    public function  messages()
    {
        return [
            'current_password.required' => 'Mời nhập mật khẩu hiện tại !',
            'password.required' => 'Mời nhập mật khẩu mới !',
            'password.confirmed' => 'Mật khẩu nhập lại  không khớp mật khẩu mới!'
        ];
    }
}
