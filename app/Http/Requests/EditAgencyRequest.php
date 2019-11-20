<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EditAgencyRequest extends FormRequest
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
            'name' =>'required',
            'address' => 'required',
            'district' => 'required',  
            'city' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Tên đại lý là trường bắt buộc !',
            'address.required' => 'Địa chỉ là trường bắt buộc !',
            'district.required' => 'Quận(Huyện) là trường bắt buộc !',
            'city.required' => 'Tỉnh(Thành phố) là trường bắt buộc !',
         
        ];
    }
}
