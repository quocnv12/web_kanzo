<?php

namespace App\Http\Controllers\frontend;
use App\models\{news,product};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TintucController extends Controller
{
    function Getnew()
    {
        $data['news']=news::orderBy('id','desc')->paginate(6);
        $data['product']=product::where('state',1)->paginate(3);
        // dd($data);
        return view('pages.new',$data);
    }
    function GetDetail($slug)
    {
        $data['newss']=news::orderBy('id','desc')->paginate(6);
        $data['product']=product::where('state',1)->paginate(3);
        $data['news']=news::where('slug',$slug)->first();
        //dd($data);
        return view('pages.new_detail',$data);
    }
}
