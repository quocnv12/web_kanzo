<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\introduce;
use App\models\banner_introduce;

class IntroduceController extends Controller
{
    public function list(){
    	$introduce = introduce::all();
    	return view('admins.introduce.list',compact('introduce'));
    }
    public function add(){
    	return view('admins.introduce.add');
    }
    public function post_add(Request $req){
    	$this ->validate($req,[
    		'title' => 'required|unique:introduce,title',
            'active' => 'required',
    		'introduce_content' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    		'introduce_content.required' => 'Nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
    	]);
    	$new = new introduce;
    	$new->title = $req->title;
    	$new->slug = str_slug($req->title);
    	$new->content = $req->introduce_content;
    	$new->active = $req->active;
    	$new->save();

    	return redirect()->route('introduce.list');
    }
    public function edit($id){
    	$introduce = introduce::find($id);
    	return view('admins.introduce.edit',compact('introduce'));
    }
    public function post_edit(Request $req,$id){
        $this ->validate($req,[
            'title' => 'required|unique:introduce,title,'.$id,
            'introduce_content' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'title.unique' => 'Tiêu đề đã tồn tại!',
            'introduce_content.required' => 'Nội dung là trường bắt buộc!',
        ]);
        $new = introduce::find($id);
        $new->title = $req->title;
        $new->slug = str_slug($req->title);
        $new->content = $req->introduce_content;
        $new->active = $req->active;
        $new->save();
        return redirect()->route('introduce.list');
    }
    public function del($id){
        introduce::destroy($id);
        return redirect()->route('introduce.list');
    }
    public function banner(){
        $banner = banner_introduce::all();
        return view('admins.introduce.banner',compact('banner'));
    }
    public function banner_edit($id){
        $banner = banner_introduce::find($id);
        return view('admins.introduce.banner_edit',compact('banner'));
    }
    public function post_banner_edit($id,Request $req){
        $this->validate($req,[
            'image' => 'required',
        ],[
            'image.required' => 'Ảnh chưa được cập nhật',
        ]);
        $banner = banner_introduce::find($id);
        $banner->image = $req->image;
        $banner->save();
        return redirect()->route('introduce.banner');
    }

}
