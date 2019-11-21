<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\View;
use App\models\category;

class CategoryController extends Controller
{
    //
	// public function __construct()
	// {
	// 	$data['category'] = category::all();

	// 	View::Share($data);
	// }
	public function getListCategory()
    {
        $data['category'] = category::orderBy('id','desc')->get();
    	return view('admins.category.list', $data);
    }
    public function getAddCategory()
    {
    	return view('admins.category.add');
    }
    public function postAddCategory(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|unique:category,name',
            
        ],[
            'name.required' => 'Tên loại sản phẩm không được xác định',
            'name.min' => 'Tên loại sản phẩm không được ít hơn 3 kí tự',
            'name.unique'=>'Tên danh mục đã tồn tại'
            
        ]);
        
    	DB::table('category')->insert([
            'name' =>$request->name,
            'slug' => str_slug($request->name),
            'active' =>1,
            
        ]);
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }
    public function getEditCategory($id_category)
    {
        $data['category'] = DB::table('category')->find($id_category);
      
    	return view('admins.category.edit', $data);
    }
    public function postEditCategory(Request $request, $id_category)
    {
        $this->validate($request,[
            'name' => 'required|min:3|unique:category,name,'.$id_category,
        ],[
            'name.required' => 'Tên loại sản phẩm không được xác định',
            'name.min' => 'Tên loại sản phẩm không được ít hơn 3 kí tự',
        ]);
        
        
        DB::table('category')->where('id', '=', $id_category)->update([
            'name' =>$request->name,
            'slug' => str_slug($request->name),
          
            
        ]);
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
    public function getDeleteCategory($id_category)
    {
        category::destroy($id_category);
        return redirect('admin/category')->with('thongbao','Xóa thành công danh mục !');
    	
    }

}
