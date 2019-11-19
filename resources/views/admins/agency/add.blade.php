@extends('admins.layout.master')
@section('agency','active')
@section('title','Thêm đại lý')
@section('content')
<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="#" class="active">Đại lý</a> </li>
    </ul>
    <hr>

    <div class="col-xs-6 col-md-12 col-lg-12">
        <div class="panel panel-primary">
            <div class="panel-heading" style="font-size:16px">Thêm đại lý</div>
            <div class="panel-body">
            <form method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="form-group">
                        <label>Tên đại lý :</label>
                        <input type="text" class="form-control" placeholder="Nhập tên đại lý" name="name">
                        {!! ShowError($errors,'name') !!}
                    </div>
                    <div class="form-group">
                            <label>Địa chỉ :</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="address">
                            {!! ShowError($errors,'address') !!}
                    </div> 
                    <div class="form-group">
                            <label>Quận (Huyện) :</label>
                            <input type="text" class="form-control" placeholder="Nhập quận (huyện)" name="district">
                            {!! ShowError($errors,'district') !!}
                    </div>  
                    <div class="form-group">
                            <label>Tỉnh (Thành phố) :</label>
                            <input type="text" class="form-control" placeholder="Nhập quận (huyện)" name="city">
                            {!! ShowError($errors,'city') !!}
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
