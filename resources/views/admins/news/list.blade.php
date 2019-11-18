@extends('admins.layout.master')
@section('title','Danh sách')
@section('news','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tin Tức</a> </li>
    </ul>
    <div class="page-title">
        <a href="{{route('news.add')}}"><button class="btn btn-primary">Thêm mới</button></a>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">STT
                            </th>
                            <th style="width:10%">Ảnh</th>
                            <th style="width:12%">Tiêu Đề</th>
                            <th style="width:38%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:2%">T.Thái</th>
                            <th style="width:6%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$row->id}}</td>
                            <td>
                                @if($row->image)
                                    <img src="assets/images_news/{{$row->image}}" alt="">
                                @else
                                    <img src="assets/images_news/default-image.jpg" alt="">
                                @endif
                            </td>
                            <td>{{$row->name}}</td>
                            <td>{!! $row->content !!}</td>
                            <td class="center">
                                @if($row->active == 1)
                                    Hiện @else Ẩn
                                @endif
                            </td>
                            <td>
                                <a href="{{route('news.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('news.del',['id'=>$row->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Xóa! bạn có muốn tiếp tục?')"><i class="fa fa-trash-o"></i></a>
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


