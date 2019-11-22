@extends('admins.layout.master')
@section('video','active')
@section('title','Thêm mới')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Giới thiệu chung</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm mới</div>
        <div class="panel-body">
           
            <div class="row">
                <form action="" method="POST" role="form">
                 @csrf
                    <div class="col-md-5">
                        
                        <div class="form-group">
                            <label>Video</label>
                            <input id="vdeo" type="file" name="video" value="" class="form-control hidden"
                                onchange="changeVideo(this)">
                            <img id="avatarVideo" class="thumbnail" width="100%" height="350px" style="height: 350px;object-fit: contain" src="images/import-img.png">
                            @if($errors->has('video'))
                                <div class="alert alert-danger">{{$errors->first('video')}}</div>
                            @endif
                        </div>
                        
                        <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Cập nhật</button>
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
