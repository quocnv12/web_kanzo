@extends('admins.layout.master')
@section('title','Sửa tài khoản')
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
            <div class="panel-heading" style="font-size:16px">Sửa chức năng</div>
            <div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Chức năng</label>
                            @if (session('thongbao1'))
                                <div class="alert alert-danger" role="alert">
                                    <strong>{{ session('thongbao1') }}</strong>
                                </div>
                            @endif
                            <select name="level" class="form-control">
                                <option value="{{ $phanquyen->level }}">{{ $phanquyen->level }}</option>
                                <option value="Quản trị viên">Quản trị viên</option>
                                <option value="Biên tập viên">Biên tập viên</option>
                                <option value="Cộng tác viên">Cộng tác viên</option>
                            </select>
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
