@extends('admins.layout.master')
@section('title','Thêm Sản phẩm')
@section('product','active')
@section('content')

<div>
	<div class="page-title">
        <h3>Sản phẩm - <span class="semi-bold">Thêm</span>
        </h3>
    </div>
    <div>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $err)
                        {{$err}}<br>
                    @endforeach

                </div>

            @endif
            @if(session('thongbao'))
                <div class="alert alert-success">
                    {{session('thongbao')}}
                </div>
            @endif
    </div>
</div>

<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Thêm sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="{{route('product.add.post')}}" method="post" enctype="multipart/form-data">
        		@csrf
	            <div class="row">
	                <div class="col-md-8">
	                	<div class="form-group">
	                        <label>Loại sản phẩm</label>
	                        <select name="id_category" class="form-control">
	                        	@foreach($category as $item)
	                            	<option value="{{$item->id}}">{{$item->name}}</option>
	                            @endforeach
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <label>Tên sản phẩm</label>
	                        <input type="text" name="name" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Mã sản phẩm</label>
	                        <input type="text" name="code_name" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Giá sp</label>
	                        <input type="text" name="price" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Giá sale</label>
	                        <input type="text" name="sale_price" class="form-control" value="">
	                    </div>
	                    <div class="form-group">
	                        <label>Sản phẩm mới</label>
	                        <select name="new" class="form-control">
	                            <option value="0">Không</option>
	                            <option value="1">Có</option>
	                        </select>
	                    </div>
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
	                        <label>Ảnh sản phẩm</label>
	                        <input id="img" type="file" name="img" class="form-control"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/import-img.png">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Nội dung</label>
	                            <textarea name="content" id="content"></textarea>
	                        </div>
	                    </div>
	                </div>
	                <div class="form-actions">
	                    <div class="pull-right">
	                        <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
	                        <button type="button" class="btn btn-white btn-cons">Cancel</button>
	                    </div>
	                </div>
	            </div>
            </form>
        </div>
    </div>
</div>
@endsection
