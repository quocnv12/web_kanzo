<?php

namespace App\Http\Controllers\frontend;
use App\models\agency;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AgencyController extends Controller
{
    function GetAgency()
    {
        $data['agency']=agency::all();
        return view('pages.diemban',$data);
    }
//----------tim kiem
    function GetSearch(request $request)
    {
      
       $data['agency']=agency::all();
        $data['agencys']=agency::where('city',$request->city)->orWhere('district',$request->district)->paginate(20);
       
        return view('pages.tiemkiem_diemban',$data);
    }
}
