<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Http\Request;
class CheckRealnameRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if(preg_match('/^(?=.*[a-z])(?=.*[A-Z])[A-Za-z]{10,20}$/', request()->realname)) {
            return true;
        }
        return false;


    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Tên tài khoản tối thiểu 10 ký tự, có ít nhất 1 chữ cái viết hoa';
    }
}
