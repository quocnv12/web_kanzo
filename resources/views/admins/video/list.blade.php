@extends('admins.layout.master')
@section('title','Danh sách')
@section('video','active')
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
                            <th >Ảnh & Video</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($video as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->title}}</td>
                            <td class="col-md-5">
                                @if(empty($row->image))
                                    <video style="width: 70%;height: 300px ;object-fit: cover;" controls>
                                        <source src="video/{{$row->video}}" type="video/mp4">
                                    </video>
                                @else
                                    <img src="images/{{ $row->image }}" style="height: 300px">
                                @endif
                            </td>
                            <td>
                                <a href="{{route('video.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
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
