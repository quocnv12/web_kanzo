<?php

namespace App\Http\Controllers\admin;
use App\models\agency;
use Illuminate\Http\Request;
use App\Http\Requests\{AgencyRequest,EditAgencyRequest};
use App\Http\Controllers\Controller;

class AgencyController extends Controller
{
    function GetList()
    {
        $data['agency']=agency::orderBy('id','desc')->get();
        return view('admins.agency.list',$data);
    }
//---------------thêm
    function GetAdd()
    {
        return view('admins.agency.add');
    }
    function PostAdd(AgencyRequest $request)
    {
        $agency=new agency;
        $agency->name = $request->name;
        $agency->address=$request->address;
        $agency->district=$request->district;
        $agency->city=$request->city;
        $agency->save();
        return redirect('admin/agency')->with('thongbao','Thêm đại lý thành công !');
    }

//------------------sửa
    function GetEdit($id)
    {
        $data['agency']=agency::find($id);
        return view('admins.agency.edit',$data);
    }
    function PostEdit(EditAgencyRequest $request, $id)
    {
        $agency=agency::find($id);
        $agency->name = $request->name;
        $agency->address=$request->address;
        $agency->district=$request->district;
        $agency->city=$request->city;
        $agency->save();
        return redirect('admin/agency')->with('thongbao','Sửa đại lý thành công !');
    }

    //-------------xóa
    function delete($id)
    {
        agency::destroy($id);
        return redirect('admin/agency')->with('thongbao','Xóa đại lý thành công !');
    }
}
