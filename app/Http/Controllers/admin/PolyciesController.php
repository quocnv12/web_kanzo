<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\polycies;

class PolyciesController extends Controller
{
    public function list(){
    	$polycies = polycies::all();
    	return view('admins.polycies.list',compact('polycies'));
    }
    public function add(){
    	return view('admins.polycies.add');
    }
    public function post_add(Request $req){
    	$this ->validate($req,[
    		'title' => 'required|unique:polycies,title',
    		'polycies_content' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    		'polycies_content.required' => 'Nội dung là trường bắt buộc!',
    	]);
    	$new = new polycies;
    	$new->title = $req->title;
    	$new->slug = str_slug($req->title);
    	$new->content = $req->polycies_content;
    	// $new->type = 1;  //1:giới thiệu - 2:chính sách
    	$new->active = $req->active;
    	$new->save();

    	return redirect()->route('polycies.list');
    }
    public function edit($id){
    	$polycies = polycies::find($id);
    	return view('admins.polycies.edit',compact('polycies'));
    }
    public function post_edit(Request $req,$id){
        $this ->validate($req,[
            'title' => 'required',
            'polycies_content' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'polycies_content.required' => 'Nội dung là trường bắt buộc!',
        ]);
        $new = polycies::find($id);
        $new->title = $req->title;
        $new->slug = str_slug($req->title);
        $new->content = $req->polycies_content;
        $new->active = $req->active;
        $new->save();
        return redirect()->route('polycies.list');
    }
    public function del($id){
        polycies::destroy($id);
        return redirect()->route('polycies.list');
    }
}
