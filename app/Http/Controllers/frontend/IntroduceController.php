<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\introduce;
use App\models\banner_introduce;

class IntroduceController extends Controller
{
    public function index($slug){
    	$data['introduce'] = introduce::all();
    	$data['banner_introduce'] = banner_introduce::all();
    	$data['detail']=introduce::where('slug',$slug)->first();
	    $data['news']=introduce::orderBy('id','desc')->get();
    	return view('pages.intro',$data);
    }
}
