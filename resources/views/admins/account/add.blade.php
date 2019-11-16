@extends('admins.layout.master')
@section('title','Thêm tài khoản')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Tài khoản</a> </li>
    </ul>
    <hr>

    <div class="col-xs-6 col-md-12 col-lg-12">
        <div class="panel panel-primary">
           
            <div class="panel-heading" style="font-size:16px">Thêm tài khoản</div>
            <div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Email :</label>
                            <input type="text" name="email" class="form-control" value="{{ old('email') }}">
                            {!! ShowError($errors,'email') !!}
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Password :</label>
                            <input type="password" class="form-control" name="password">
                            {!! ShowError($errors,'password') !!}

                        </div>
                      
                        <div class="form-group">
                            <label>Họ tên :</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name') }}">
                            {!! ShowError($errors,'name') !!}
                        </div>
                        <div class="form-group">
                                <label>Số điện thoại :</label>
                                <input type="text" name="phone" class="form-control" value="{{ old('phone') }}">
                                {!! ShowError($errors,'phone') !!}
                            </div>
                          
                        <div class="form-group">
                            <label>Chức năng</label>
                            @if (session('thongbao1'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ session('thongbao1') }}</strong>
                                </div>
                            @endif
                            <select name="level" class="form-control">
                                <option value="Chưa chọn">Chọn ...</option>
                                <option value="Quản trị viên">Quản trị viên</option>
                                <option value="Biên tập viên">Biên tập viên</option>
                                <option value="Cộng tác viên">Cộng tác viên</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ảnh tài khoản</label>
                            {!! ShowError($errors,'image') !!}
                            <input id="img" type="file" name="image" value="{{ old('image') }}" class="form-control hidden"
                                onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/import-img.png">
                        </div>
                    </div>
                   
                    <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
                            {{-- <button type="menu" class="btn btn-white btn-cons">Cancel</button> --}}
                        </div>
                    </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    @endsection
