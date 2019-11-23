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
    @if (session('thongbao'))
    <div class="alert bg-success" role="alert">
        {{ session('thongbao') }}<a href="admin/account" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
    </div>
    @endif
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th class="col-md-2">Ảnh</th>
                            <th>Tiêu Đề</th>
                            <th >Nội dung</th>
                            <th >T.Thái</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($news as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$row->id}}</td>
                            <td>
                                @if($row->image)
                                    <img style="width:150px;" src="assets/images_news/{{$row->image}}" alt="">
                                @else
                                    <img src="assets/images_news/default-image.jpg" alt="">
                                @endif
                            </td>
                            <td>{{$row->name}}</td>
                            <td >{!! $row->content !!}</td>
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


