<?php

namespace App\Http\Controllers\admin;

use App\models\news;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Str;


class NewsController extends Controller
{
    //
    public function list(){
        $news = news::all();

        return view('admins.news.list',compact('news'));
    }

    public function add(){

        return view('admins.news.add');
    }

    public function post_add(Request $req){

        $this ->validate($req,[
            'name' => 'required|unique:news,name',
            'active' => 'required',
            'content' => 'required',
            'image' =>  'image'
        ],[
            'name.required' => 'Tiêu đề là trường bắt buộc!',
            'name.unique' => 'Tiêu đề đã tồn tại!',
            'content.required' => 'Nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
            'image.image'   =>  'Ảnh không hợp lệ !'
        ]);

        $new = new news;
        $new->name = $req->name;
        $new->slug = Str::slug($req->name);
        $new->content = $req->content;

        if ($req->image)
        {
            $image = rand().'.'.request()->image->getClientOriginalExtension();
            //dam bao khong random trung nhau
            while(file_exists(public_path('assets/images_news/'.$image)))
            {
                $image = rand().'.'.request()->image->getClientOriginalExtension();
            }
            request()->image->move(public_path('assets/images_news'), $image);
            $new->image = $image;
            $new->save();
        }

        $new->active = $req->active;
        $new->save();

        return redirect()->route('news.list');
    }

    public function edit($id){
        $news = news::find($id);

        return view('admins.news.edit',compact('news'));
    }

    public function post_edit(Request $req,$id){

        $this ->validate($req,[
            'name' => 'required|unique:news,name, '.$id.' ',
            'active' => 'required',
            'content' => 'required',
            'image' =>  'image|nullable'
        ],[
            'name.required' => 'Tiêu đề là trường bắt buộc!',
            'name.unique' => 'Tiêu đề đã tồn tại!',
            'content.required' => 'Nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
            'image.image'   =>  'Ảnh không hợp lệ !'
        ]);

        $new = news::find($id);
        $new->name = $req->name;
        $new->slug = Str::slug($req->name);

        //if change image
        $old_image_path = 'assets/images_news/'.$new->image;
        if ($req->image)
        {
            //delete old image
            if ($new->image){
                unlink(public_path($old_image_path));
            }

            $image = rand().'.'.request()->image->getClientOriginalExtension();
            //dam bao khong random trung nhau
            while(file_exists(public_path('assets/images_news/'.$image)))
            {
                $image = rand().'.'.request()->name->getClientOriginalExtension();
            }
            request()->image->move(public_path('assets/images_news'), $image);
            $new->image = $image;

            $new->save();
        }

        $new->content = $req->content;
        $new->active = $req->active;
        $new->save();

        return redirect()->route('news.list');
    }

    public function del($id){
        $new = news::find($id);

        if ($new->image)
        {
            $old_image_path = 'assets/images_news/'.$new->image;
            if (file_exists(public_path($old_image_path))){
                unlink(public_path($old_image_path));
            }

        }
        $new->delete();

        return redirect()->route('news.list');
    }
}
