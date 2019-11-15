<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\introduce;
use DB;

class IntroduceController extends Controller
{
    public function list(){
    	// $introduce = DB::table('introduce')->orderBy('id','DESC')->get();
    	$introduce = introduce::all();
    	return view('admins.introduce.list',compact('introduce'));
    }
    public function add(){
    	return view('admins.introduce.add');
    }
    public function post_add(Request $req,$id){
    	$this ->validate($req,[
    		'title' => 'required|unique:introduce,title',
    		'content' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    		'content.required' => 'Nội dung là trường bắt buộc!',
    	]);
    	$new = new introduce;
    	$new->title = $req->title;
    	$new->slug = str_slug($req->title);
    	$new->content = $req->content;
    	$new->type = 1;  //1:giới thiệu - 2:chính sách
    	$new->active = $req->active;
    	$new->save();

    	return redirect()->route('introduce.list');
    }
    public function edit($id){
    	$introduce = introduce::find($id);
    	return view('admins.introduce.edit',compact('introduce'));
    }
}
