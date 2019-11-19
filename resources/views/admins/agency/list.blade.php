@extends('admins.layout.master')
@section('agency','active')
@section('title','Danh sách đại lý')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Đại lý</a> </li>
    </ul>
    <div class="page-title">
        <h3><span class="semi-bold">Danh sách đại lý</span></h3>
 
                @if (session('thongbao'))
                <div class="alert bg-success" role="alert">
                    {{ session('thongbao') }}<a href="admin/agency" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
                </div>
                @endif
        
    </div>
</div>
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped" id="example">
                    <thead>
                        <tr>
                            <th>Tên đại lý</th>
                            <th>Địa chỉ</th>
                            <th>Quận (Huyện)</th>
                            <th>Tỉnh (Thành phố)</th>
                            <th class="col-md-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($agency as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->district }}</td>
                                <td>{{ $item->city }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-primary" id="edit" href="admin/agency/edit/{{ $item->id }}" onclick="">Sửa</a>
                                        <a  class="btn btn-danger"
                                        href="admin/agency/delete/{{ $item->id }}"
                                        onclick="return confirm('Hành động sẽ xóa tài khoản này! bạn có muốn tiếp tục?')">Xóa</a>
                                    </div>
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
