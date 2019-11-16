@extends('admins.layout.master')
@section('title','Danh sách')
@section('polycies','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tables</a> </li>
    </ul>
    <div class="page-title">
        <a href="{{route('polycies.add')}}"><button class="btn btn-primary">Thêm mới</button></a>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">STT
                                <!-- <div class="checkbox check-default" style="margin-right:auto;margin-left:auto;">
                                    <input type="checkbox" value="1" id="checkbox1">
                                    <label for="checkbox1"></label>
                                </div> -->
                            </th>
                            <th style="width:12%">Tiêu Đề</th>
                            <th style="width:38%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:2%">T.Thái</th>
                            <th style="width:6%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($polycies as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{!! $row->content !!}</td>
                            <td class="center">
                                @if($row->active == 1)
                                    Hiện @else Ẩn
                                @endif
                            </td>
                            <td>
                                <a href="{{route('polycies.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('polycies.del',['id'=>$row->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Xóa! bạn có muốn tiếp tục?')"><i class="fa fa-trash-o"></i></a>
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
