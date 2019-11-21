<?php

namespace App\Http\Controllers\frontend;
use App\Http\Request\ContactRequests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\sent_us;
use Mail;

class ContactController extends Controller
{
    function GetContact()
    {
        return view('pages.contact');
    }
    function PostContact(request $request)
    {
       
        $this->validate($request,[
            'name' =>'required',
            'address' => 'required',
            'email' => 'required|email',  
            'phone' => 'required|numeric|min:10',
            'content' => 'required',
        ],[
            'name.required' => 'Bạn chưa nhập tên !',
            'email.required' => 'Bạn chưa nhập email !',
            'email.email' => 'Email chưa đúng định dạng !',
            'address.required' => 'Bạn chưa nhập địa chỉ !',
            'phone.required' => 'Bạn chưa nhập số điên thoại !',
            'phone.numeric' => 'Số điện thoại phải là kiểu số !',
            'phone.min' => 'Số điện thoại thiếu !',
            'content.required' => 'Bạn chưa nhập nội dung !',
        ]);
        $contact =new sent_us;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->address = $request->address;
        $contact->phone = $request->phone;
        $contact->content = $request->content;
        $contact->status =1;
        $contact->save();

        $url=route('sentus.list');
        $data=[
            'route' => $url,
            'name' =>$request->name,
            'email' =>$request->email,
            'address' =>$request->address,
            'phone' =>$request->phone,
            'content' =>$request->content,
        ];

        Mail::send('pages.mailsend', $data, function ($message) {
            $message->from('Kanzo.anhtuan@gmail.com', 'Kanzo');
            $message->to('vanquocnb@gmail.com', 'Kanzo')->subject('Kanzo - thông báo có đơn đặt hàng mới !');
        });


        return redirect()->back()->with('thongbao','Gửi thành công !')->withInput();

    }
}
