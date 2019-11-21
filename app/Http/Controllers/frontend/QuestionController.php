<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\question;
use App\models\banner_polycies;

class QuestionController extends Controller
{
    public function index($slug){
    	$data['question'] = question::all();
    	$data['banner_polycies'] = banner_polycies::all();
    	$data['detail']=question::where('slug',$slug)->first();
    	return view('pages.question',$data);
    }
}
