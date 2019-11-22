<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\news;
use App\models\category;
use DB;

class ProductController extends Controller
{
    public function index($slug)
	{

		$categorygl = category::orderBy('name','ASC')->get();
		$cats = category::where('slug',$slug)->first();
		$product = product::where('slug',$slug)->first();

		$data['categorygl'] = $categorygl;
		$data['cats'] = $cats;
		$data['product'] = $product;
		$data['news']=news::orderBy('id','desc')->paginate(6);
		if($cats){
			$data['products'] = product::where('id_category',$cats->id)->paginate(8);
			return view('pages.product',$data);
		}else{
			return view('pages.product',$data);
		}
		// return view('pages.product',compact('categorygl','product'));
	}
	public function getProductDetail($slug,Request $request)
	{
		//Đếm lượt xem 
		if(!$request->session()->has($request->slug))
        {
            DB::table('product')->where('slug',$request->slug)->increment('count_view',1);
        }
        //END Đếm lượt xem 
		$data['product_detail'] = product::where('slug', '=', $slug)->first();

		
		$name_category = category::join('product', 'category.id', '=', 'product.id_category')->where('product.slug', $slug)->select('product.id_category', 'category.name')->first();

		$data['name_category'] = $name_category->toArray();

		// dd($data['name_category']['id_category']);
		
		// Sản phẩm liên quan
		$data['related_products'] = DB::table('product')->where('id_category', $data['name_category']['id_category'])->orderBy('id','ASC')->skip(0)->take(4)->get();
		

		// Sản phẩm được xem nhiều nhất
		$data['bestview_products'] = DB::table('product')->orderBy('count_view','DESC')->skip(0)->take(4)->get();

		// dd($data);
		return view('pages.product_detail', $data);
	}

}
