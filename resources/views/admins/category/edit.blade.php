
@extends('admins.layout.master')
@section('product','active')
@section('title','Sửa loại sản phẩm')
<!-- @section('introduce','active') -->
@section('content')

<div>
    <ul class="breadcrumb">
        <li>
            <p>YOU ARE HERE</p>
        </li>
        <li><a href="admin/category" class="active">Danh mục</a> </li>
    </ul>
    <hr>
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
            @if(session('thongbaoloi'))
                <div class="alert alert-danger">
                    {{session('thongbaoloi')}}
                </div>
            @endif
    </div>
</div>

<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Sửa loại sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="{{route('category.edit.post', ['id_category' => $category->id])}}" method="post" enctype="multipart/form-data">
        		@csrf
	            <div class="row">
	                <div class="col-md-8">
	                    <div class="form-group">
	                        <label>Tên loại sản phẩm</label>
	                        <input type="text" name="name" class="form-control" value="{{$category->name}}">
	                    </div>
	                    {{-- <div class="form-group">
                            <label>Hiển thị</label>
                        @if($category->active == 1)
                            <label class="radio-inline">
                                <input name="active" value="1" checked type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="active" value="0" type="radio">Không
                            </label>
                        @else
                            <label class="radio-inline">
                                <input name="active" value="1" type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="active" value="0" checked type="radio">Không
                            </label>
                        @endif
                        </div> --}}
	                </div>

	                <div class="form-actions">
	                    <div class="pull-right">
	                        <button type="submit" class="btn btn-danger btn-cons"><i class="icon-ok"></i> Save</button>
	                        {{-- <button type="button" class="btn btn-white btn-cons">Cancel</button> --}}
	                    </div>
	                </div>
	            </div>
            </form>
        </div>
    </div>
</div>
@endsection
