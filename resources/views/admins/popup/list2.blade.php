@extends('admins.layout.master')
@section('title','Đơn chưa xử lý')
@section('popup','active')
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
    <a href="{{route('popup.list2')}}"><button class="btn btn-primary">Đơn đã xử lý</button></a>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tiêu đề</th>
                            <th data-hide="phone,tablet">Ảnh</th>
                            <th data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($popup as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->title}}</td>
                            <td>
                                <img src="images/{{$row->image}}" style="height: 300px">
                            </td>
                            <td class="center">
                                @if($row->active == 0)
                                    <a href="{{route('popup.active_edit',['id'=>$row->id])}}" class="btn btn-xs btn-primary">Cho ẩn</a>
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
