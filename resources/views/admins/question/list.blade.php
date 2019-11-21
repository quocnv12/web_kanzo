@extends('admins.layout.master')
@section('title','Danh sách')
@section('question','active')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Câu hỏi thường gặp</a> </li>
    </ul>
    <div class="page-title">
        <a href="{{route('question.add')}}"><button class="btn btn-primary">Thêm mới</button></a>
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
                            <th style="width:12%">Tiêu Đề</th>
                            <th style="width:32%" data-hide="phone,tablet">Nội dung</th>
                            <th style="width:10%" data-hide="phone,tablet">Ảnh</th>
                            <th style="width:2%">T.Thái</th>
                            <th style="width:6%" data-hide="phone,tablet"></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($question as $row)
                        <tr class="odd gradeX">
                            <td class="center">{{$loop->index+1}}</td>
                            <td>{{$row->title}}</td>
                            <td>{!! $row->content !!}</td>
                            <td><img style="height: 80px;width: 130px" src="images/{{ $row->image }}"></td>
                            <td class="center">
                                @if($row->active == 1)
                                    Hiện @else Ẩn
                                @endif
                            </td>
                            <td>
                                <a href="{{route('question.edit',['id'=>$row->id])}}" class="btn btn-xs btn-success"><i class="fa fa-edit"></i></a>
                                <a href="{{route('question.del',['id'=>$row->id])}}" class="btn btn-xs btn-danger" onclick="return confirm('Xóa! bạn có muốn tiếp tục?')"><i class="fa fa-trash-o"></i></a>
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
