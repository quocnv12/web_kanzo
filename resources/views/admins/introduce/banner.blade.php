@extends('admins.layout.master')
@section('title','Danh sách')
@section('introduce','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Giới thiệu</a> </li>
    </ul>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Banner</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($banner as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->title}}</td>
                            <td><img src="images/{{ $row->image }}" style="height: 300px"></td>
                            <td>
                                <a href="{{route('introduce.banner_edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
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
