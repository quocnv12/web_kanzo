@extends('admins.layout.master')
@section('title','Đơn chưa xử lý')
@section('sentus','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Đơn hàng</a> </li>
    </ul>
</div>
<div class="page-title">
    <a href="{{route('sentus.list2')}}"><button class="btn btn-primary">Đơn đã xử lý</button></a>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ Tên</th>
                            <th data-hide="phone,tablet">Số điện thoại</th>
                            <th data-hide="phone,tablet">Email</th>
                            <th data-hide="phone,tablet">Địa chỉ</th>
                            <th>Xác nhận đơn</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($sentus as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{{$row->phone}}</td>
                            <td>{{$row->email}}</td>
                            <td>{{$row->address}}</td>
                            <td class="center">
                                @if($row->status == 1)
                                    <a href="{{route('sentus.edit',['id'=>$row->id])}}" class="btn btn-xs btn-primary">Xác nhận</a>
                                @endif
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
