<?php

namespace App\Http\Controllers\frontend;
use App\models\{promotion,news,product};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PromotionController extends Controller
{
    function GetPromotion()
    {
        $data['product']=product::where('state',1)->paginate(3);
        $data['news']=news::orderBy('id','desc')->paginate(6);
        $data['promotion']=promotion::paginate(6);
        return view('pages.khuyenmai',$data);
    }

    function GetDetail($slug)
    {
        $data['product']=product::where('state',1)->paginate(3);
        $data['news']=news::orderBy('id','desc')->paginate(6);
        $data['promotion']=promotion::where('slug',$slug)->first();
     
        return view('pages.chitietkhuyenmai',$data);
    }
}
