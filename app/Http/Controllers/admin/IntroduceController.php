<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\introduce;
use DB;

class IntroduceController extends Controller
{
    public function list(){
    	// $introduce = DB::table('introduce')->orderBy('id','DESC')->get();
    	$introduce = introduce::all();
    	return view('admins.introduce.list',compact('introduce'));
    }
}
