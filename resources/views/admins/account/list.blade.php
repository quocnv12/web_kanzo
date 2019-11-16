@extends('admins.layout.master')

@section('title','Danh sách tài khoản')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tài khoản</a> </li>
    </ul>
    <div class="page-title">
        <h3><span class="semi-bold">Tài Khoản</span></h3>
 
                @if (session('thongbao'))
                <div class="alert bg-success" role="alert">
                    {{ session('thongbao') }}<a href="admin/account" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
                            <th>Họ tên</th>
                            <th>Email</th>
                            <th>Số điện thoại</th>
                            <th>Ảnh</th>
                            <th>Chức năng</th>
                            <th class="col-md-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($account as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td class="center"><img style="width:50px;height:50px" src="images/{{ $item->image }}"></td>
                                <td class="center">{{ $item->level }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-primary" id="edit" href="admin/account/edit/{{ $item->id }}" onclick="">Sửa</a>
                                        <a  class="btn btn-danger"
                                        href="admin/account/delete/{{ $item->id }}"
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
