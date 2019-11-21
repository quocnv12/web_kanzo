<?php

namespace App\Http\Controllers\admin;
use App\models\product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    function GetIndex()
    {
        $data['product']=product::all();
        return view('admins.index',$data);
    }
}
