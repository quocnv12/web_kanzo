<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use App\models\account;
use Carbon\Carbon;
use Mail;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    function GetResetPassword()
    {
        return view('admins.login.login');
    }
    function PostResetPassword(request $request)
    {
     //   dd($request->all());
        $this->validate($request,
        [
            'emailreset' =>'required|email',
        ],
        [
            'emailreset.required' => 'Vui lòng nhập email để lấy lại mật khẩu !',
            'emailreset.email' => 'Email không đúng định dạng !',
        ]);

        $email=$request->emailreset;
        $checkEmail = account::where('email',$email)->first();
        if(!$checkEmail)
        {
            return redirect()->back()->with('thongbao','Email không tồn tại !');
        }
        $code = bcrypt(time().$email);
        $checkEmail->code =$code;
        $checkEmail->time_code =Carbon::now();
        $checkEmail->save();
        $url = route('link.reset.password',['code'=>$checkEmail->code,'email'=>$email]);
        $data=[
            'route' => $url
        ] ;

        Mail::send('admins.account.resetpasword.reset_password', $data, function($message) use ($email){
            $message->to($email, 'Reset Password')->subject('Lấy lại mật khẩu !');
        });
        return redirect()->back()->with('success','Link lấy lại mật khẩu đã gửi vào email của bạn .Vui lòng đăng nhập email để lấy lại mật khẩu !');
    }

    function ResetPassword(request $request)
    {
        $code = $request->code;
        $email = $request->email;
        $checkEmail=account::where([
            'code'=>$code,
            'email'=>$email])->first();
        if(!$checkEmail)
        {
            return redirect()->back()->with('thongbao','Xin lỗi đường dẫn lấy lại link không đúng');
        }
        return view('admins.account.resetpasword.reset');
    }

    function PosetReset(request $request)
    {
        $this->validate($request,
        [
            'password' =>'required|min:6',
            'password_confirmation'=>'required|same:password'
        ],
        [
            'password.required'=>'Mật khẩu không được đế trống !',
            'password_confirmation.same' => 'Mật khẩu nhập chưa khớp !',
            'password_confirmation.required' => 'Không được để trống trường này !',
            'password.min' => 'Mật khẩu phải lớn hơn 6 kí tự !',
        ]);
        if($request->password)
        {
            $code = $request->code;
            $email = $request->email;
            $checkEmail=account::where([
                'code'=>$code,
                'email'=>$email
    
            ])->first(); 
        }

        if(!$checkEmail)
        {
            
            return redirect()->back()->with('thongbao','Xin lỗi đường dẫn lấy lại link không đúng');
        }
        $checkEmail->password=bcrypt($request->password);

        $checkEmail->save();

        return redirect('login')->with('success','Lấy lại mật khẩu thành công !');

    }

}
