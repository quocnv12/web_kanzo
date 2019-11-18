<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PasswordRequest extends FormRequest
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
            'password_old'=>'required',
            'password' =>'required|min:6',
            'password_confirmation'=>'required|same:password'
        ];
    }
    public function messages()
    {
        return [
            'password_old.required'=>'Mật khẩu cũ không được đế trống !',
            'password.required'=>'Mật khẩu mới không được đế trống !',
            'password_confirmation.same' => 'Mật khẩu nhập chưa khớp !',
            'password_confirmation.required' => 'Nhập lại mật khẩu mới !',
            'password.min' => 'Mật khẩu phải lớn hơn 6 kí tự !',
        ];
    }
}
