<?php

namespace App\Http\Controllers\admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    function GetLogin()
    {
        return view('admins.login.login');
    }

    function PostLogin(request $request)
    {
       
        $this->validate($request,
        [
           
            'email' =>'required|email',
            'password' => 'required|min:6'  
        ],
        [
            'email.required' => 'Email là trường bắt buộc !',
            'email.email' => 'Email không đúng định dạng !',
            'password.required' => 'Mật khẩu là trường bắt buộc !',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự !',
           
        ]);
        $email=$request->email;
        $password=$request->password;
        $remember=$request->has('remember')? true : false ;
        if( Auth::attempt(['email' => $email, 'password' => $password],$remember))
                {
                    return redirect('admin');
                }
            else
                {
                    return  redirect()->back()->with("thongbao","Tài khoản hoặc mật khẩu không chính xác !")->withInput();
                }
    }

    function Getlogout()
    {
        Auth::logout();
        return redirect('login');
    }

}
