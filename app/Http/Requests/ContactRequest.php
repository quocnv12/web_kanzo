<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
            'email' => 'required|email',  
            'phone' => 'required|numeric|min:10',
            'content' => 'required',
            
        ];
    }
    public function messages()
    {
        return [
            'name.required' => 'Bạn chưa nhập tên !',
            'email.required' => 'Bạn chưa nhập email !',
            'email.email' => 'Email chưa đúng định dạng !',
            'address.required' => 'Bạn chưa nhập địa chỉ !',
            'phone.required' => 'Bạn chưa nhập số điên thoại !',
            'phone.numeric' => 'Số điện thoại phải là kiểu số !',
            'phone.min' => 'Số điện thoại thiếu !',
            'content.required' => 'Bạn chưa nhập nội dung !',
        ];
    }
}
