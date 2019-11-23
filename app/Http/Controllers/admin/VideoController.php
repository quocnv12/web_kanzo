<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\video;

class VideoController extends Controller
{
    public function list(){
    	$video = video::all();
    	return view('admins.video.list',compact('video'));
    }
    public function add(){
    	return view('admins.video.add');
    }
    public function post_add(Request $req){
    	$this ->validate($req,[
    		'title' => 'required|unique:video,title',
    		'video_content' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    		'video_content.required' => 'Nội dung là trường bắt buộc!',
    	]);
    	$new = new video;
    	$new->title = $req->title;
    	$new->slug = str_slug($req->title);
    	$new->content = $req->video_content;
    	$new->active = $req->active;
    	$new->save();

    	return redirect()->route('video.list');
    }
    public function edit($id){
        $banner = banner_video::find($id);
        return view('admins.video.banner_edit',compact('banner'));
    }
    public function post_edit($id,Request $req){
        $this->validate($req,[
            'image' => 'required',
        ],[
            'image.required' => 'Ảnh chưa được cập nhật',
        ]);
        $banner = banner_video::find($id);
        $banner->image = $req->image;
        $banner->save();
        return redirect()->route('video.banner');
    }
}
