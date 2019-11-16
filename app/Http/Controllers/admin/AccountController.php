<?php

namespace App\Http\Controllers\admin;
use App\models\account;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AccountController extends Controller
{
    function GetList()
    {
        $data['account']=account::orderBy('id','desc')->get();
        return view('admins.account.list',$data);
    }

    //thêm tài khoản
    function GetAddAccount()
    {
        return view('admins.account.add');
    }
    function PostAddAccount(request $request)
    {
        $this->validate($request,
        [
           
            'email' =>'required|email|unique:users,email',
            'password' => 'required|min:6',
            'name' => 'required',  
            'phone' => 'required|numeric',
            'image'=>'required|image' 
        ],
        [
            'email.required' => 'Email là trường bắt buộc !',
            'email.email' => 'Email không đúng định dạng !',
            'email.unique' => 'Email đã tồn tại !',
            'password.required' => 'Mật khẩu là trường bắt buộc !',
            'password.min' => 'Mật khẩu phải chứa ít nhất 6 ký tự !',
            'name.required'=>'Họ tên không được để trống !',
            'phone.required'=>'Số điện thoại không được để trống !',
            'phone.numeric'=>'Số điện thoại phải là kiểu số !',
            'image.required'=>'Hình ảnh không được để trống !',
            'image.image'=>'Sại định dạng ảnh !'
        ]);

        $user=new account;
        $user->email = $request->email;
        $user->password = bcrypt($request->phone);
        $user->name = $request->name;
        $user->phone = $request->phone;
        if($request->level=='Chưa chọn'){
            return redirect()->back()->with('thongbao1','Bạn chưa chọn chức năng tài khoản !')->withInput();
        }
        else{
            $user->level = $request->level;
        }
        if($request->hasFile('image'))
        {
            $file=$request->image;
            $file_name=str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $user->image=$file_name ;
        }
        $user->save();
        return redirect('admin/account')->with('thongbao','Thêm thành công tài khoản !')->withInput();

       
    }


 //sửa tài khoản

    function GetEditAccount($id)
    {
        $data['user']=account::find($id);
        return view('admins.account.edit',$data);
    }

    function PostEditAccount(request $request, $id)
    {
        $this->validate($request,
        [
            'email' =>'required|email|unique:users,email,'.$id,
           
            'name' => 'required',  
            'phone' => 'required|numeric',
            'image'=>'required|image' 
        ],
        [
            'email.required' => 'Email là trường bắt buộc !',
            'email.email' => 'Email không đúng định dạng !',
            'email.unique' => 'Email đã tồn tại !',
          
            'name.required'=>'Họ tên không được để trống !',
            'phone.required'=>'Số điện thoại không được để trống !',
            'phone.numeric'=>'Số điện thoại phải là kiểu số !',
            'image.required'=>'Hình ảnh không được để trống !',
            'image.image'=>'Sại định dạng ảnh !'
        ]);

        $user=account::find($id);
        $user->email = $request->email;
        if($request->password!="")
                {
                    $user->password= bcrypt($request->password);
                }
        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->level = $request->level;
        if($request->hasFile('image'))
        {
           if($user->image!='no-img.jpg')
           {
               unlink('images/'.$user->image);
           }
            $file=$request->image;
            $file_name=str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $user->image=$file_name ;
        }
        $user->save();
        return redirect('admin/account')->with('thongbao','Sửa thành công tài khoản !')->withInput();
    }

    function Delete($id)
    {
        account::destroy($id);
        return redirect('admin/account')->with('thongbao','Xóa thành công tài khoản !');
    }

}
