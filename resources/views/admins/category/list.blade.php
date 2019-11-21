@extends('admins.layout.master')
@section('category','active')
@section('title','Danh sách tài khoản')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="admin/category" class="active">Danh mục sản phẩm</a> </li>
    </ul>
    <div class="page-title">
        <h3><span class="semi-bold">Danh mục</span></h3>
 
                @if (session('thongbao'))
                <div class="alert bg-success" role="alert">
                    {{ session('thongbao') }}<a href="admin/category" class="pull-right"><span class="glyphicon glyphicon-remove"></span></a>
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
                            <th>Tên danh mục</th>
                            <th class="col-md-2">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($category as $item)
                            <tr class="odd gradeX">
                                <td>{{ $item->name }}</td>
                                <td>
                                    <div>
                                        <a class="btn btn-primary" id="edit" href="admin/category/edit/{{ $item->id }}" onclick="">Sửa</a>
                                        <a  class="btn btn-danger"
                                        href="admin/category/delete/{{ $item->id }}"
                                        onclick="return confirm('Hành động sẽ xóa danh mục này! bạn có muốn tiếp tục?')">Xóa</a>
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
