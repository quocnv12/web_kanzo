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
        @if (session('thongbao'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('thongbao') }}</strong>
            </div>
        @endif
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="">
                    <thead>
                        <tr>
                            <th style="width:35%">Tên công ty</th>
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
                        {{-- @foreach($contact as $row) --}}
                        <tr class="odd gradeX">
                            <td>{{$contact->name}}</td>
                            <td>{{$contact->address}}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>{{  $contact->phone2 }}</td>
                            <td class="center">{{ $contact->fax }}</td>
                            <td class="center">{{$contact->email}}</td>
                            <td class="center">{{$contact->fanpage}}</td>
                            <td>
                                <a href="{{route('contact.edit',['id'=>$contact->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                            </td>
                        </tr>
                        {{-- @endforeach --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


@endsection
