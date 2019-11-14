<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\introduce;
use DB;

class IntroduceController extends Controller
{
    public function list(){
    	$introduce = DB::table('introduce')->orderBy('id','DESC')->get();
    	return view('admins.introduce.list',compact('introduce'));
    }
}
