<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\category;

class ProductController extends Controller
{
    public function index($slug)
	{

		$categorygl = category::orderBy('name','ASC')->get();
		$cats = category::where('slug',$slug)->first();
		$product = product::where('slug',$slug)->first();
		$category = category::where('slug',$slug)->first();
		if($cats){
			$products = product::where('id_category',$cats->id)->paginate(8);
			return view('pages.product',compact('cats','products','categorygl','category'));
		}else{
			return view('pages.product',compact('cats','product','categorygl','category'));
		}

		// return view('pages.product',compact('categorygl','product'));
	}

}
