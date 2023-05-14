<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\Config;

class CheckRecaptchaRule implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $recaptcha = Config::get('app.recaptcha'); // Lấy giá trị của biến ABC trong file .env

        if ($recaptcha == 'ON') {
            // Kiểm tra Recaptcha nếu ABC là true
            // Thực hiện kiểm tra Recaptcha ở đây và trả về true hoặc false tùy theo kết quả kiểm tra
        }

        // Nếu ABC không phải là true, cho phép validation pass mà không kiểm tra Recaptcha
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The Recaptcha validation failed.';
    }
}
