@extends('admins.layout.master')
@section('video','active')
@section('title','Thêm mới')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Thêm Ảnh</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm mới</div>
        <div class="panel-body">
           
            <div class="row">
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                 @csrf
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="title" id="title" class="form-control" value="">
                            @if($errors->has('title'))
                                <div class="alert alert-danger">{{$errors->first('title')}}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input id="img" type="file" name="image" value="" class="form-control hidden"
                                   onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100%" height="400px" style="height: 400px;object-fit: contain" src="images/import-img.png">
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        
                        <div class="form-actions">
                            <div class="pull-right">
                                <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Lưu</button>
                                <a href="{{route('video.list')}}">
                                    <button type="button" class="btn btn-white btn-cons"> Trở lại</button>
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
