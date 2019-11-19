@extends('admins.layout.master')
@section('news','active')
@section('title','Thêm')
@section('content')
<div>
        <ul class="breadcrumb">
            <li>
                <p>YOU ARE HERE</p>
            </li>
            <li><a href="#" class="active">Tin Tức</a> </li>
        </ul>
        <hr>
  
<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm mới</div>
        <div class="panel-body">
           
            <div class="row">
                <form action="" method="POST" role="form" enctype="multipart/form-data">
                 @csrf
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tiêu đề</label>
                            <input type="text" name="name" id="name" class="form-control" value="{{$news->name}}">
                            @if($errors->has('name'))
                                <div class="alert alert-danger">
                                    {{$errors->first('name')}}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Ảnh Tin Tức</label>
                            <input class="form-control" name="image" type="file" id="change_image" />

                            <div>
                                <p>Ảnh Cũ :</p>
                                @if($news->image)
                                    <img width="400px" height="300px" src="assets/images_news/{{$news->image}}" alt="">
                                @else
                                    <img width="400px" height="300px" src="assets/images_news/default-image.jpg" alt="">
                                @endif
                            </div>
                            <br>
                            <div id="new_image">
                                <p>Ảnh Mới:</p>
                                <img src="" width="400px" height="300px" id="demo_image"  alt="">
                                <span id="X" style="color: red; cursor: pointer; font-size: 1.5em">X</span>
                            </div>
                            @if ($errors->has('image'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>Trạng thái</label>
                            <div class="">
                                <input id="checkbox1" type="radio" value="1" name="active" @if($news->active == 1) checked @endif>
                                Hiện
                                <input id="checkbox2" type="radio" value="0" name="active" @if($news->active == 0) checked @endif>
                                Ẩn
                            </div>
                            @if($errors->has('active'))
                                <div class="alert alert-danger">
                                    {{ $errors->first('active') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="form-group">
                                <label class="form-label">Nội dung</label>
                                <textarea name="content" id="content">{{$news->content}}</textarea>
                            </div>
                            @if($errors->has('content'))
                                <div class="alert alert-danger">
                                    {{$errors->first('content')}}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="form-actions">
                        <div class="pull-right">
                            <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Cập nhật</button>
                            <a href="{{route('introduce.list')}}">
                                <button type="button" class="btn btn-white btn-cons"> Trở lại</button>
                            </a>
                            
                        </div>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
    <!--Show image before submit-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        function readURL(input) {
            $('#new_image').show();
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#demo_image').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }

        }
        $("#change_image").change(function(){
            readURL(this);
        });

        $('#X').click(function () {
            $('#new_image').hide();
            $('#change_image').val('');
        });

    </script>
@endsection

