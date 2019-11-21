@extends('admins.layout.master')
@section('title','Sửa Sản phẩm')
@section('product','active')
@section('content')

<div>
		<ul class="breadcrumb">
				<li>
					<p>YOU ARE HERE</p>
				</li>
				<li><a href="admin/product" class="active">Sản phẩm</a> </li>
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
    </div>
</div>

<div class="col-xs-6 col-md-12 col-lg-12">
    <div class="panel panel-primary">
        <div class="panel-heading" style="font-size:16px">Sửa sản phẩm</div>
        <div class="panel-body">

        	<form action="{{route('product.edit.post', ['id_product' => $product->id])}}" method="post" role="form" enctype="multipart/form-data">
        		@csrf
	            <div class="row">

	                <div class="col-md-8">
	                	<div class="form-group">
	                        <label>Loại sản phẩm</label>
	                        <select name="id_category" class="form-control">
									<option value="{{ $product->id_category }}">{{ $product->products->name }}</option>
									@foreach ($category as $item)
										<option value="{{ $item->id }}">{{ $item->name }}</option>
									@endforeach
	                        	
	                        </select>
	                    </div>
	                    <div class="form-group">
	                        <label>Mã sản phẩm</label>
	                        <input type="text" name="code_name" class="form-control" value="{{$product->code_name}}">
	                    </div>
	                    <div class="form-group">
	                        <label>Tên sản phẩm</label>
	                        <input type="text" name="name" class="form-control" value="{{$product->name}}">
	                    </div>
	                    
	                    <div class="form-group">
	                        <label>Giá sản phẩm</label>
	                        <input type="text" name="price" class="form-control" value="{{$product->price}}">
	                    </div>
	                    <div class="form-group">
	                        <label>Giá sale</label>
	                        <input type="text" name="sale_price" class="form-control" value="{{$product->sale_price}}">
	                    </div>
	                    
	                    {{-- <div class="form-group">
                            <label>Sản phẩm mới</label>
                        @if($product->new == 1)
                            <label class="radio-inline">
                                <input name="new" value="1" checked type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="new" value="0" type="radio">Không
                            </label>
                        @else
                            <label class="radio-inline">
                                <input name="new" value="1" type="radio">Có
                            </label>
                            <label class="radio-inline">
                                <input name="new" value="0" checked type="radio">Không
                            </label>
                        @endif
                        </div> --}}
	                    {{-- <div class="form-group">
                            <label>Hiển thị</label>
                        @if($product->active == 1)
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
                        {{-- <div class="form-group">
	                        <label>Lượt xem <i class="fa fa-eye" aria-hidden="true">: </i></label>
	                        <input type="text" name="count_view" value="{{$product->count_view}}">
	                    </div> --}}
	                </div>
	                <div class="col-md-4">
	                    <div class="form-group">
	                        <label>Ảnh sản phẩm</label>
	                        <input id="img" type="file" name="img" value="" class="form-control hidden"
	                            onchange="changeImg(this)">
	                        <img id="avatar" class="thumbnail" width="100%" height="350px" src="images/{{$product->image}}">
	                    </div>
	                </div>
	                <div class="col-md-12">
	                    <div class="form-group">
	                        <div class="form-group">
	                            <label class="form-label">Thông tin sản phẩm</label>
	                            <textarea name="information" id="content1">{{$product->information}}</textarea>
	                        </div>
	                    </div>
					</div>
					<div class="col-md-12">
							<div class="form-group">
								<div class="form-group">
									<label class="form-label">Thông số kĩ thuật</label>
									<textarea name="thongso" id="content2">{!!  $product->thongso !!}</textarea>
								</div>
							</div>
						</div>
						<div class="col-md-12">
								<div class="form-group">
									<div class="form-group">
										<label class="form-label">Hướng dẫn sử dụng</label>
										<textarea name="huongdan" id="content3">{!!  $product->huongdan !!}</textarea>
									</div>
								</div>
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
