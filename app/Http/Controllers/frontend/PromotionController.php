<?php

namespace App\Http\Controllers\frontend;
use App\models\{promotion,news,product};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    function GetPromotion()
    {
        $data['product']=product::where('state',1)->orderBy('id','desc')->limit(3)->get();
        $data['news']=news::orderBy('id','desc')->limit(6)->get();
        $data['promotion']=promotion::paginate(6);
        //dd($data);
        return view('pages.khuyenmai',$data);
    }

    function GetDetail($slug)
    {
        $data['product']=product::where('state',1)->orderBy('id','desc')->limit(3)->get();
        $data['news']=news::orderBy('id','desc')->limit(6)->get();
        $data['promotion']=promotion::where('slug',$slug)->first();
  //   dd($data);
        return view('pages.chitietkhuyenmai',$data);
    }
}
