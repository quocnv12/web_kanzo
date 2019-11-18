<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\intro_general;

class IntrogeneralController extends Controller
{
    public function list(){
    	$introduce = intro_general::all();
    	return view('admins.intro_general.list',compact('introduce'));
    }
    
    public function edit($id){
    	$introduce = intro_general::find($id);
    	return view('admins.intro_general.edit',compact('introduce'));
    }
    public function post_edit(Request $req,$id){
        $this ->validate($req,[
            'title' => 'required',
            'intro_content' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'intro_content.required' => 'Nội dung là trường bắt buộc!',
        ]);
        $up = intro_general::find($id);
        $up->title = $req->title;
        $up->slug = str_slug($req->title);
        $up->content = $req->intro_content;
        if($req->hasFile('image')){
            $file=$req->image;
            $file_name=str_slug($req->image).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $up->image=$file_name;
        }
        $up->save();
        return redirect()->route('intro.list');
    }
    
}
