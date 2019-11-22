<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\promotion;
use Illuminate\Support\Str;

class PromotionController extends Controller
{
    public function list(){
        $promotion = promotion::all();

        return view('admins.promotion.list',compact('promotion'));
    }

    public function add(){

        return view('admins.promotion.add');
    }

    public function post_add(Request $req){

        $this ->validate($req,[
            'name' => 'required|unique:promotion,name',
            'active' => 'required',
            'summary' => 'required',
            'promotion_content' => 'required',
            'image' =>  'image'
        ],[
            'name.required' => 'Tiêu đề là trường bắt buộc!',
            'name.unique' => 'Tiêu đề đã tồn tại!',
            'promotion_content.required' => 'Nội dung là trường bắt buộc!',
            'summary.required' => 'Tót tắt nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
            'image.image'   =>  'Ảnh không hợp lệ !'
        ]);

        $new = new promotion;
        $new->name = $req->name;
        $new->slug = Str::slug($req->name);
        $new->content = $req->promotion_content;
        $new->summary = $req->summary;

        if($req->hasFile('image'))
        {
            $file = $req->image;
            $file_name = str_slug($req->name).'.'.$file->getClientOriginalExtension();
           // dd($file_name); 
            $file->move('assets/images_promotion/',$file_name);
            $new->image=$file_name;
        }

        $new->active = $req->active;
        $new->save();

        return redirect()->route('promotion.list');
    }

    public function edit($id){
        $promotion = promotion::find($id);

        return view('admins.promotion.edit',compact('promotion'));
    }

    public function post_edit(Request $req,$id){

        $this ->validate($req,[
            'name' => 'required|unique:promotion,name',
            'active' => 'required',
            'summary' => 'required',
            'promotion_content' => 'required',
            'image' =>  'image'
        ],[
            'name.required' => 'Tiêu đề là trường bắt buộc!',
            'name.unique' => 'Tiêu đề đã tồn tại!',
            'promotion_content.required' => 'Nội dung là trường bắt buộc!',
            'summary.required' => 'Tót tắt nội dung là trường bắt buộc!',
            'active.required' => 'Trạng thái là trường bắt buộc!',
            'image.image'   =>  'Ảnh không hợp lệ !'
        ]);

        $new = promotion::find($id);
        $new->name = $req->name;
        $new->slug = Str::slug($req->name);
        $new->content = $req->promotion_content;
        $new->summary = $req->summary;

        if($req->hasFile('image'))
        {
            $file = $req->image;
            $file_name = str_slug($req->name).'.'.$file->getClientOriginalExtension();
           // dd($file_name); 
            $file->move('assets/images_promotion/',$file_name);
            $new->image=$file_name;
        }

        $new->active = $req->active;
        $new->save();

        return redirect()->route('promotion.list');
    }

    public function del($id){
        $new = promotion::find($id);

        if ($new->image)
        {
            $old_image_path = 'assets/images_promotion/'.$new->image;
            if (file_exists(public_path($old_image_path))){
                unlink(public_path($old_image_path));
            }

        }
        $new->delete();

        return redirect()->route('promotion.list');
    } 
}
