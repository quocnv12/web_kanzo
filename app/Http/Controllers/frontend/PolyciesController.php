<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\polycies;
use App\models\banner_polycies;

class PolyciesController extends Controller
{
    public function index($slug){
    	$data['polycies'] = polycies::all();
    	$data['banner_polycies'] = banner_polycies::all();
    	$data['detail']=polycies::where('slug',$slug)->first();
	    $data['news']=polycies::orderBy('id','desc')->get();
    	return view('pages.polycies',$data);
    }
}
