<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\question;

class QuestionController extends Controller
{
    public function list(){
    	$question = question::all();
    	return view('admins.question.list',compact('question'));
    }
    public function add(){
    	return view('admins.question.add');
    }
    public function post_add(Request $req){
    	$this ->validate($req,[
    		'title' => 'required|unique:question,title',
            'active' => 'required',
    		'question_content' => 'required',
    	],[
    		'title.required' => 'Tiêu đề là trường bắt buộc!',
    		'title.unique' => 'Tiêu đề đã tồn tại!',
    		'question_content.required' => 'Nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
    	]);
    	$new = new question;
    	$new->title = $req->title;
    	$new->slug = str_slug($req->title);
    	$new->content = $req->question_content;
    	$new->active = $req->active;
    	$new->save();

    	return redirect()->route('question.list');
    }
    public function edit($id){
    	$question = question::find($id);
    	return view('admins.question.edit',compact('question'));
    }
    public function post_edit(Request $req,$id){
        $this ->validate($req,[
            'title' => 'required|unique:question,title,'.$id,
            'question_content' => 'required',
        ],[
            'title.required' => 'Tiêu đề là trường bắt buộc!',
            'title.unique' => 'Tiêu đề đã tồn tại!',
            'question_content.required' => 'Nội dung là trường bắt buộc!',
        ]);
        $new = question::find($id);
        $new->title = $req->title;
        $new->slug = str_slug($req->title);
        $new->content = $req->question_content;
        $new->active = $req->active;
        $new->save();
        return redirect()->route('question.list');
    }
    public function del($id){
        question::destroy($id);
        return redirect()->route('question.list');
    }
}
