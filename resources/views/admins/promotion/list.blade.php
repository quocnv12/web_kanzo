@extends('admins.layout.master')
@section('title','Danh sách')
@section('promotion','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Câu hỏi thường gặp</a> </li>
    </ul>
    <div class="page-title">
        <a href="{{route('promotion.add')}}"><button class="btn btn-primary">Thêm mới</button></a>
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-hover table-condensed" id="example">
                    <thead>
                        <tr>
                            <th style="width:1%">STT</th>
                            <th style="width:22%">Tiêu Đề</th>
                            <th style="width:22%" data-hide="phone,tablet">Tóm tắt nội dung</th>
                            <th style="width:10%" data-hide="phone,tablet">Ảnh</th>
                            <th style="width:2%">T.Thái</th>
                            <th style="width:6%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($promotion as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->name}}</td>
                            <td>{!! $row->summary !!}</td>
                            <td><img style="width: 130px" src="assets/images_promotion/{{ $row->image }}"></td>
                            <td class="center">
                                @if($row->active == 1)
                                    Hiện @else Ẩn
                                @endif
                            </td>
                            <td>
                                <a href="{{route('promotion.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('promotion.del',['id'=>$row->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Xóa! bạn có muốn tiếp tục?')"><i class="fa fa-trash-o"></i></a>
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
