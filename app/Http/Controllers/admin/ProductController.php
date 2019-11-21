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
    // public function __construct()
    // {
    //     $data['category'] = category::all();
    //     View::Share($data);
    // }

    public function getListProduct()
    {
        $viewData['product'] = product::orderBy('id','desc')->get();
       // dd($viewData);
    	return view('admins.product.list', $viewData);
    }
    public function getAddProduct()
    {
        $data['category']=category::all();
    	return view('admins.product.add',$data);
    }
    public function postAddProduct(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|min:3|unique:product,name',
            'code_name' => 'required|min:3|unique:product,code_name',
            
            'price' => 'required|numeric|min:4',
            'sale_price' => 'required|numeric',
            'image' => 'required|image',
           
            'information' => 'required',
            'thongso' => 'required',
            'huongdan' => 'required',

        ],[
            'name.required' => 'Tên sản phẩm không được xác định',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'name.min' => 'Tên sản phẩm không được ít hơn 3 kí tự',
            'code_name.required' => 'Mã sản phẩm không được xác định',
            'code_name.min' => 'Mã sản phẩm không được ít hơn 3 kí tự',
            'image.image' => 'Ảnh sai định dạng',
            'image.required' => 'Ảnh không được để trống',
            'code_name.unique' => 'Mã sản phẩm đã tồn tại',
            'price.required' => 'Giá sản phẩm không được xác định',
            'price.min' => 'Giá sản phẩm không được ít hơn 4 kí tự',
            'price.numeric' => 'Giá sản phẩm không được xác định',
            'sale_price.required' => 'Giá sản phẩm khuyến mại không được xác định',
            
           
            'information.required' => 'Thông tin sản phẩm không được để trống',
            'thongso.required' => 'Thông số kĩ thuật không được để trống',
            'huongdan.required' => 'Hướng dẫn sử dụng không được để trống',
        ]);
        // Kiểm tra định dạng ảnh 
       $prd = new product;
       $prd->code_name = $request->code_name;
       $prd->name = $request->name;
       $prd->slug = str_slug($request->slug);
       $prd->price = $request->price;
       $prd->sale_price = $request->sale_price;
       $prd->state = $request->state;
       $prd->count_view = 0;
       if($request->hasFile('image'))
       {
           $file=$request->image;
           $file_name=str_slug($request->name).'.'.$file->getClientOriginalExtension();
           $file->move('images',$file_name);
           $prd->image=$file_name ;
       }
       $prd->information = $request->information;
       $prd->thongso = $request->thongso;
       $prd->huongdan = $request->huongdan;
       if($request->id_category==0)
       {
           return redirect()->back()->with('thongbao','Bạn chưa chọn danh mục sản phẩm')->withInput();
       }
       else{
            $prd->id_category = $request->id_category;
       }
       $prd ->save();
       return redirect('admin/product')->with('thongbao','Thêm sản phẩm thành công')->withInput();
    }


    public function getEditProduct($id_product)
    {
        $dataView['product'] =product::find($id_product);
        $dataView['category']=category::all();
    	return view('admins.product.edit', $dataView);
    }
    public function postEditProduct(Request $request, $id_product)
    {
       // dd($request->all());
        $this->validate($request,[
            'name' => 'required|min:3|unique:product,name,'.$id_product,
            'code_name' => 'required|min:3|unique:product,code_name,'.$id_product,
            
            'price' => 'required|numeric|min:4',
            'sale_price' => 'required|numeric',
            'image' => 'image',
           
            'information' => 'required',
            'thongso' => 'required',
            'huongdan' => 'required',

        ],[
            'name.required' => 'Tên sản phẩm không được xác định',
            'name.min' => 'Tên sản phẩm không được ít hơn 3 kí tự',
            'name.unique' => 'Tên sản phẩm đã tồn tại',
            'code_name.unique' => 'Mã sản phẩm đã tồn tại',
            'code_name.required' => 'Mã sản phẩm không được xác định',
            'code_name.min' => 'Mã sản phẩm không được ít hơn 3 kí tự',
            'image.image' => 'Ảnh sai định dạng',
            
           
            'price.required' => 'Giá sản phẩm không được xác định',
            'price.min' => 'Giá sản phẩm không được ít hơn 4 kí tự',
            'price.numeric' => 'Giá sản phẩm không được xác định',
            'sale_price.required' => 'Giá sản phẩm khuyến mại không được xác định',
            
           
            'information.required' => 'Thông tin sản phẩm không được để trống',
            'thongso.required' => 'Thông số kĩ thuật không được để trống',
            'huongdan.required' => 'Hướng dẫn sử dụng không được để trống',
        ]);
        // Kiểm tra định dạng ảnh 
        $prd=product::find($id_product);
        $prd->code_name = $request->code_name;
        $prd->name = $request->name;
        $prd->slug = str_slug($request->slug);
        $prd->price = $request->price;
        $prd->sale_price = $request->sale_price;
        $prd->state = 1;
        $prd->count_view = 0;
        $prd->active = 1;
        if($request->hasFile('image'))
        {
           if($prd->image!='no-img.jpg')
           {
               unlink('images/'.$prd->image);
           }
            $file=$request->image;
            $file_name=str_slug($request->name).'.'.$file->getClientOriginalExtension();
            $file->move('images',$file_name);
            $prd->image=$file_name ;
        }
        $prd->information = $request->information;
        $prd->thongso = $request->thongso;
        $prd->huongdan = $request->huongdan;
        $prd->id_category = $request->id_category;
        $prd ->save();
        return redirect('admin/product')->with('thongbao','Sửa sản phẩm thành công')->withInput();
    }
    public function getDeleteProduct($id_product)
    {
    	product::destroy($id_product);
        return redirect('admin/product')->with('thongbao','Xóa sản phẩm thành công');
    }

}
