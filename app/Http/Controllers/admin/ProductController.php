<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\View;
use App\models\category;
use DB;
use App\models\product;

class ProductController extends Controller
{
    //
    public function __construct()
    {
        $data['category'] = category::all();
        View::Share($data);
    }

    public function getListProduct()
    {
        $viewData['product'] = product::all();
        // dd($viewData);
    	return view('admins.product.list', $viewData);
    }
    public function getAddProduct()
    {
    	return view('admins.product.add');
    }
    public function postAddProduct(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'code_name' => 'required|min:3',
            'id_category' => 'required',
            'price' => 'required|numeric|min:4',
            'sale_price' => 'required|numeric',
            // 'image' => 'image',
            'new' => 'required',
            'content' => 'required',
        ],[
            'name.required' => 'Tên sản phẩm không được xác định',
            'name.min' => 'Tên sản phẩm không được ít hơn 3 kí tự',
            'code_name.required' => 'Mã sản phẩm không được xác định',
            'code_name.min' => 'Mã sản phẩm không được ít hơn 3 kí tự',
            // 'image.image' => 'Sai định dạng sản phẩm',
            'id_category.required' => 'Loại sản phẩm không được xác định',
            'price.required' => 'Giá sản phẩm không được xác định',
            'price.min' => 'Giá sản phẩm không được ít hơn 4 kí tự',
            'price.numeric' => 'Giá sản phẩm không được xác định',
            'sale_price.required' => 'Giá sản phẩm khuyến mại không được xác định',
            'sale_price.min' => 'Giá sản phẩm khuyến mại không được ít hơn 3 kí tự',
            'new.required' => 'Sản phẩm mới không được xác định',
            'content.required' => 'Tên sản phẩm không được ít hơn 3 kí tự',
        ]);
        // Kiểm tra định dạng ảnh 
        if($request->hasFile('img'))
        {
            $file = $request->file('img');

            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4).'_imageproduct_'.$name;
            while(file_exists('assets/image_product/'.$image))
            {
                $image = str_radom(4).'_imageproduct_'.$name;
            }
            // Bắt đầu chuyển file vào thư mục
            $request->file('img')->move('assets/image_product/', $image);
            $file_name = $image;
        } else
        {
            return redirect()->back()->with('thongbao', 'Lỗi Ảnh!!');
        }
        
    	DB::table('product')->insert([
            'name' =>$request->name,
            'code_name' =>$request->code_name,
            'slug' => str_slug($request->name),
            'price' =>$request->price,
            'sale_price' =>$request->sale_price,
            'image' =>$file_name,
            'content' =>$request->content,
            'id_category' =>$request->id_category,
            'active' =>1,
            'new' =>$request->new,
            'count_view' =>0,
            'created_at' => now(),
        ]);
        return redirect()->back()->with('thongbao', 'Thêm thành công');
    }
    public function getEditProduct($id_product)
    {
        $dataView['product'] = DB::table('product')->find($id_product);
        // dd($dataView);
    	return view('admins.product.edit', $dataView);
    }
    public function postEditProduct(Request $request, $id_product)
    {
        $this->validate($request,[
            'name' => 'required|min:3',
            'code_name' => 'required|min:3',
            'id_category' => 'required',
            'price' => 'required|numeric|min:4',
            'sale_price' => 'required|numeric',
            // 'image' => 'image',
            'new' => 'required',
            'content' => 'required',
        ],[
            'name.required' => 'Tên sản phẩm không được xác định',
            'name.min' => 'Tên sản phẩm không được ít hơn 3 kí tự',
            'code_name.required' => 'Mã sản phẩm không được xác định',
            'code_name.min' => 'Mã sản phẩm không được ít hơn 3 kí tự',
            // 'image.image' => 'Sai định dạng sản phẩm',
            'id_category.required' => 'Loại sản phẩm không được xác định',
            'price.required' => 'Giá sản phẩm không được xác định',
            'price.min' => 'Giá sản phẩm không được ít hơn 4 kí tự',
            'price.numeric' => 'Giá sản phẩm không được xác định',
            'sale_price.required' => 'Giá sản phẩm khuyến mại không được xác định',
            'sale_price.min' => 'Giá sản phẩm khuyến mại không được ít hơn 3 kí tự',
            'new.required' => 'Sản phẩm mới không được xác định',
            'content.required' => 'Tên sản phẩm không được ít hơn 3 kí tự',
        ]);
        // Kiểm tra định dạng ảnh 
        if($request->hasFile('img'))
        {
            $file = $request->file('img');

            $name = str_slug($file->getClientOriginalName());
            $image = str_random(4).'_imageproduct_'.$name;
            while(file_exists('assets/image_product/'.$image))
            {
                $image = str_radom(4).'_imageproduct_'.$name;
            }
            // Bắt đầu chuyển file vào thư mục
            $request->file('img')->move('assets/image_product/', $image);
            $file_name = $image;
        } else
        {
            return redirect()->back()->with('thongbao', 'Lỗi Ảnh!!');
        }
        
        DB::table('product')->where('id', '=', $id_product)->update([
            'name' =>$request->name,
            'code_name' =>$request->code_name,
            'slug' => str_slug($request->name),
            'price' =>$request->price,
            'sale_price' =>$request->sale_price,
            'image' =>$file_name,
            'content' =>$request->content,
            'id_category' =>$request->id_category,
            'active' =>$request->active,
            'new' =>$request->new,
            // 'count_view' =>$request->count_view,
            'updated_at' => now(),
        ]);
        return redirect()->back()->with('thongbao', 'Sửa thành công');
    }
    public function getDeleteProduct($id_product)
    {
    	DB::table('product')->where('id','=',$id_product)->delete();
        return redirect()->route('product.list')->with('thongbao','Xóa thành công!');
    }

}
