<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\contact;

class ContactController extends Controller
{
    public function list(){
    	$contact = contact::all();
    	return view('admins.contact.list',compact('contact'));
    }
    public function edit($id){
    	$contact = contact::find($id);
    	return view('admins.contact.edit',compact('contact'));
    }
    public function post_edit(Request $req,$id){
    	$this->validate($req,[
    		'address' => 'required',
    		'phone' => 'required|numeric|digits_between:8,12',
            'phone2' => 'required|numeric|digits_between:8,12',
    		'fax' => 'required|numeric',
    		'email' => 'required|email',
    		'fanpage' => 'required',
    	],[
    		'address.required' => 'Địa chỉ là trường không được để trống!',
    		'phone.required' => 'Số điện thoại là trường không được để trống!',
            'phone2.required' => 'Số điện thoại là trường không được để trống!',
    		'phone.numeric' => 'Số điện thoại phải là số!',
            'phone2.numeric' => 'Số điện thoại phải là số!',
    		'phone.digits_between' => 'Số điện thoại không đúng định dạng',
            'phone2.digits_between' => 'Số điện thoại không đúng định dạng',
    		'fax.required' => 'Fax là trường không được để trống!',
    		'fax.numeric' => 'Fax không đúng định dạng!',
    		'email.required' => 'Email là trường không được để trống!',
    		'email.email' => 'Email không đúng định dạng!',
    		'fanpage.required' => 'Địa chỉ là trường không được để trống!',
    	]);
    	$update = contact::find($id);
    	$update->address = $req->address;
    	$update->phone = $req->phone;
        $update->phone2 = $req->phone2;
    	$update->fax = $req->fax;
    	$update->email = $req->email;
    	$update->fanpage = $req->fanpage;
		$update->save();
		
    	return redirect()->route('contact.list');
    }
}
