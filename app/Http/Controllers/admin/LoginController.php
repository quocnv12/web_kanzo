<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\PasswordRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\models\account;

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


    //------------Đổi mật khẩu
    function GetPassword()
    {
        return view('admins.account.resetpasword.password');
    }
    function PostPassword(PasswordRequest $request)
    {
        if (Hash::check($request->password_old, Auth::user()->password))
        {
          $user=account::find(Auth::user()->id);
          $user->password=bcrypt($request->password);
          $user->save();
          return redirect()->back()->with('thongbao','Đổi mật khẩu thành công !');
        }else {
            return redirect()->back()->with('thongbao1','Mật khẩu cũ không chính xác !');
        }
    }



}
