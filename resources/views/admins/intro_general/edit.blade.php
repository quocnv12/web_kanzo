@extends('admins.layout.master')
@section('intro_general','active')
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
                    <div class="col-md-8">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="title" id="title" class="form-control" value="{{$introduce->title}}">
                            @if($errors->has('title'))
                                {{$errors->first('title')}}
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputFile">Trạng thái </label>
                            <div class="">
                                <input id="checkbox1" type="radio" value="1" name="image" <?php echo $introduce->image == 1 ? 'checked':'';     ?>>
                                Hiện
                                <input id="checkbox2" type="radio" value="0" name="image" <?php echo $introduce->image == 0 ? 'checked':''; ?>>
                                Ẩn
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label">Nội dung</label>
                                <textarea name="intro_content" id="intro_content">{{$introduce->content}}</textarea>
                            </div>
                            @if($errors->has('intro_content'))
                                {{$errors->first('intro_content')}}
                            @endif
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input id="img" type="file" name="img" value="" class="form-control hidden"
                                onchange="changeImg(this)">
                            <img id="avatar" class="thumbnail" width="100%" height="350px" style="height: 350px;object-fit: contain" src="images/import-img.png">
                        </div>
                        <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Cập nhật</button>
                            <a href="{{route('introduce.list')}}">
                                <button type="button" class="btn btn-white btn-cons"> Trở lại</button>
                            </a>
                            
                        </div>
                    </div>
                    </div>
                    <div class="col-md-12">
                        
                    </div>
                    
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
