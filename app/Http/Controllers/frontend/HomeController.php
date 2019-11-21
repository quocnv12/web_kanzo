<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\product;
use App\models\popup;
use App\models\intro_general;
use App\models\question;

class HomeController extends Controller
{
	public function index(){
		$data['popup'] = popup::first();
		$data['question'] = question::orderBy('updated_at','DESC')->limit(2)->get();
		$data['product'] = product::orderBy('id','DESC')->limit(5)->get();
		$data['product1'] = product::find(1);
		$data['product1'] = product::find(2);
		$data['intro_general'] = intro_general::first();
		return view('pages.home',$data);
	}
    
}
