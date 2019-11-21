@extends('admins.layout.master')
@section('title','Danh sách')
@section('contact','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Thông tin liên hệ</a> </li>
    </ul>
    <div class="page-title">
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width:35%">Địa chỉ</th>
                            <th style="width:10%" data-hide="phone,tablet">Số điện thoại</th>
                            <th style="width:10%" data-hide="phone,tablet">Số điện thoại 2</th>
                            <th style="width:10%">Số Fax</th>
                            <th style="width:8%">Email</th>
                            <th style="width:6%" data-hide="phone,tablet">Fanpage</th>
                            <th style="width:6%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $row)
                        <tr class="odd gradeX">
                            <td>{{$row->address}}</td>
                            <td>{{$format = chunk_split($row->phone, 4, ' ')}}</td>
                            <td>{{$format = chunk_split($row->phone2, 4, ' ')}}</td>
                            <td class="center">{{$format = chunk_split($row->fax, 4, ' ')}}</td>
                            <td class="center">{{$row->email}}</td>
                            <td class="center">{{$row->fanpage}}</td>
                            <td>
                                <a href="{{route('contact.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
