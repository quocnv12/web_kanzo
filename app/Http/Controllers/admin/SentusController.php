<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\models\sent_us;

class SentusController extends Controller
{
    public function list(){
    	$sentus = sent_us::where('status',1)->orderBy('updated_at','DESC')->get();
    	return view('admins.sentus.list',compact('sentus'));
    }
    public function list2(){
    	$sentus = sent_us::where('status',0)->orderBy('updated_at','DESC')->get();
    	return view('admins.sentus.list2',compact('sentus'));
    }
    public function edit($id){
    	$sentus = sent_us::find($id);
    	$sentus->status = 0;
    	$sentus->save();
    	return redirect()->route('sentus.list');
    }
    public function del($id){
    	sent_us::destroy($id);
    	return redirect()->route('sentus.list2');
    }
}
