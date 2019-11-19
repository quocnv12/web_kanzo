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
	public function __construct()
	{
		$data['category'] = category::all();

		View::Share($data);
	}
	public function getListCategory()
    {
        $viewData['category'] = category::all();
        // dd($viewData);
    	return view('admins.category.list', $viewData);
    }
    public function getAddCategory()
    {
    	return view('admins.Category.add');
    }
    public function postAddCategory(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|',
            
        ],[
            'name.required' => 'Tên loại sản phẩm không được xác định',
            'name.min' => 'Tên loại sản phẩm không được ít hơn 3 kí tự',
            
        ]);
        
    	DB::table('category')->insert([
            'name' =>$request->name,
            'slug' => str_slug($request->name),
            'active' =>1,
            'created_at' => now(),
        ]);
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }
    public function getEditCategory($id_category)
    {
        $dataView['category'] = DB::table('category')->find($id_category);
        // dd($dataView);
    	return view('admins.category.edit', $dataView);
    }
    public function postEditCategory(Request $request, $id_category)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
        ],[
            'name.required' => 'Tên loại sản phẩm không được xác định',
            'name.min' => 'Tên loại sản phẩm không được ít hơn 3 kí tự',
        ]);
        
        
        DB::table('category')->where('id', '=', $id_category)->update([
            'name' =>$request->name,
            'slug' => str_slug($request->name),
            'active' =>$request->active,
            'updated_at' => now(),
        ]);
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
    public function getDeleteCategory($id_category)
    {
    	//Kiểm tra id_category được yêu cầu xóa có xuất hiện trong bảng sản phẩm không, nếu có thì hiện thông báo lỗi và không cho xóa
    	$count_product = DB::table('product')->where('id_category', $id_category)->count();
    	if($count_product <= 0)
    	{
    		DB::table('category')->where('id','=',$id_category)->delete();
        	return redirect()->route('category.list')->with('thongbao','Xóa thành công!');
    	}else
    	{
    		return redirect()->route('category.list')->with('thongbaoloi','Bạn không thể xóa loại sản phẩm này vì có nhiều sản phẩm đang thuộc loại sản phẩm này!');
    	}
    	
    }

}
