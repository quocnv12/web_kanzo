<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\popup;
use DB;

class PopupController extends Controller
{
    public function list(){
    	$active = DB::table('popup')->sum('active');
    	$popup = popup::where('active',1)->orderBy('updated_at','DESC')->get();
    	return view('admins.popup.list',compact('popup','active'));
    }
    public function list2(){
    	$active = DB::table('popup')->sum('active');
    	$popup = popup::where('active',0)->orderBy('updated_at','DESC')->get();
    	return view('admins.popup.list2',compact('popup','active'));
    }
    public function active_edit($id){
    	$up = popup::find($id);
    	if($up->active == 0) {
    		$up->active = 1;
    		$up->save();
    		return redirect()->route('popup.list2');
    	}else{
    		$up->active = 0;
    		$up->save();
    		return redirect()->route('popup.list');
    	}

    }
}
