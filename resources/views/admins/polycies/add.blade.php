@extends('admins.layout.master')
@section('polycies','active')
@section('title','Thêm')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Giới thiệu</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm mới</div>
        <div class="panel-body">
           
            <div class="row">
                <form action="" method="POST" role="form">
                 @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                            @if($errors->has('title'))
                               <div class="alert alert-danger">{{$errors->first('title')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="">
                                <input id="checkbox1" type="radio" value="1" name="active" checked>
                                Hiện
                                <input id="checkbox2" type="radio" value="0" name="active">
                                Ẩn
                            </div>
                            @if($errors->has('active'))
                                <div class="alert alert-danger">{{$errors->first('active')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label">Nội dung</label>
                                <textarea name="polycies_content" id="polycies_content"></textarea>
                            </div>
                            @if($errors->has('polycies_content'))
                                <div class="alert alert-danger">{{$errors->first('polycies_content')}}</div>
                            @endif
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Lưu</button>
                            <a href="{{route('polycies.list')}}">
                                <button type="button" class="btn btn-white btn-cons"> Trở lại</button>
                            </a>
                            
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
