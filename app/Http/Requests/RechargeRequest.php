<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\RechargedRule;
class RechargeRequest extends FormRequest
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

            'type' => ['required',
                 new RechargedRule(),
                
            ],
            'amount' => 'required|integer|min:10000',
            'code' => 'required',
            'serial' => 'required',

        ];
    }
    public function messages() {
        return [
            'type.required'  => 'Mời chọn nhà mạng !',
            'amount.required'  => 'Mời chọn mệnh giá !',
            'amount.integer'  => 'Mệnh giá không hợp lệ !',
            'amount.min'  => 'Mệnh giá không hợp lệ !',
            'code.required'  => 'Mời nhập mã thẻ !',
            'serial.required'  => 'Mời nhập serial thẻ !',
        ];
    }
    
}
