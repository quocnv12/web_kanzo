@extends('admins.layout.master')
@section('title','Danh sách')
@section('introduce','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tóm tắt giới thiệu chung</a> </li>
    </ul>
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
                            <th style="width:10%">Tiêu Đề</th>
                            <th style="width:38%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:8%">Ảnh</th>
                            <th style="width:2%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($introduce as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$row->id}}</td>
                            <td>{{$row->title}}</td>
                            <td>{!! $row->content !!}</td>
                            <td class="center">
                                <img src="images/{{ $row->image }}" alt="" width="180px" height="100px"></td>
                            <td>
                                <a href="{{route('intro.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
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
