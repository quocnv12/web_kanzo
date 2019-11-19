@extends('admins.layout.master')
@section('category','active')
@section('title','Thêm loại sản phẩm')
<!-- @section('introduce','active') -->
@section('content')

<div>
	<div class="page-title">
        <h3>loại sản phẩm - <span class="semi-bold">Thêm</span>
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
        <div class="panel-heading" style="font-size:16px">Thêm loại sản phẩm</div>
        <div class="panel-body">

        	<form role="form" action="{{route('category.add.post')}}" method="post" enctype="multipart/form-data">
        		@csrf
	            <div class="row">
	                <div class="col-md-8">
	                    <div class="form-group">
	                        <label>Tên loại sản phẩm</label>
	                        <input type="text" name="name" class="form-control" value="">
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
