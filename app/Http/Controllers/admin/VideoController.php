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
            'video' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
            'video.required' => 'Video là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    	]);
    	$new = new video;
        $new->title = $req->title;
        // $new->image = '';
        $new->video = $req->video;
        // getClientOriginalName()
    	// if($req->hasFile('video')){
     //        $file=$req->video;
     //        $file_name=str_slug($req->video).'.'.$file->getClientOriginalExtension();
     //        $file->move('video',$file_name);
     //        $new->video=$file_name;
     //    }
        $new->save();

    	return redirect()->route('video.list');
    }
    public function edit($id){
        $video = video::find($id);
        return view('admins.video.edit',compact('video'));
    }
    public function post_edit($id,Request $req){
        $this->validate($req,[
            'title' => 'required|unique:video,title',
            'video' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'video.required' => 'Video là trường bắt buộc!',
            'title.unique' => 'Tiêu đề đã tồn tại!',
        ]);
        $video = video::find($id);
        $video->title = $req->title;
        $video->image = '';
        $video->video = $req->video;
        $video->save();
        return redirect()->route('video.list');
    }
    public function add_image(){
        return view('admins.video.add_image');
    }
    public function post_add_image(Request $req){
        $this ->validate($req,[
            'title' => 'required|unique:video,title',
            'image' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'image.required' => 'Ảnh là trường bắt buộc!',
            'title.unique' => 'Tiêu đề đã tồn tại!',
        ]);
        $new = new video;
        $new->title = $req->title;
        if($req->hasFile('image')){
            $file=$req->image;
            $file_name=str_slug($req->title).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $new->image=$file_name;
        }
        // $new->video = '';
        $new->save();

        return redirect()->route('video.list');
    }
    public function edit_image($id){
        $video = video::find($id);
        return view('admins.video.edit_image',compact('video'));
    }
    public function post_edit_image($id,Request $req){
        $this->validate($req,[
            'title' => 'required|unique:video,title',
            'image' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'image.required' => 'Ảnh là trường bắt buộc!',
            'title.unique' => 'Tiêu đề đã tồn tại!',
        ]);
        $video = video::find($id);
        $video->title = $req->title;
        // $video->video = '';
        if($req->hasFile('image')){
            $file=$req->image;
            $file_name=str_slug($req->title).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $video->image=$file_name;
        }
        $video->save();
        return redirect()->route('video.list');
    }
    public function del($id){
        video::destroy($id);
        return redirect()->route('video.list');
    }
}
