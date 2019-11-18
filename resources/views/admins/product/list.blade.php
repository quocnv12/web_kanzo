@extends('admins.layout.master')
@section('title','Danh sách San phẩm')
<!-- @section('introduce','active') -->
@section('content')

<div>
	<div class="page-title">
        <h3>Sản phẩm - <span class="semi-bold">Danh sách</span>
        </h3>
    </div>
    <ul class="breadcrumb">
        <li><a href="{{Route('product.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm Sản phẩm"></a> </li>
    </ul>
    <div class="box-header">
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
<div class="row-fluid">
    <div class="span12">
        <div class="grid simple ">
            <div class="grid-body ">
                <table class="table table-striped table-bordered" id="example2">
                    <thead>
                        <tr>
                            <th>Mã sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Slug</th>
                            <th>Giá</th>
                            <th>Giá sale</th>
                            <th>Ảnh</th>
                            <th>Content</th>
                            <th>Loại sản phẩm</th>
                            <th>Trạng thái</th>
                            <th>Lượt xem</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                   	  @foreach($product as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->code_name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>{{$item->price}}</td>
                            <td class="center">{{$item->sale_price}}</td>
                            <td><img id="avatar" class="thumbnail" width="100px" height="auto" src="assets/image_product/{{$item->image}}"></td>
                            <td>{{$item->content}}</td>
                            @foreach($category as $item_cate)
                                @if($item_cate->id == $item->id_category)
                            <td class="center">{{$item_cate->name}}</td>
                                @endif
                            @endforeach
                            @if($item->new == 1)
                            <td><img src="images/product_new.jpeg" width="60px" height="auto" alt=""></td>
                            @else
                            <td>Cũ</td>
                            @endif
                            <td><i class="fa fa-eye" aria-hidden="true"> </i>{{$item->count_view}}</td>
                            <td class="center">
                            	<a href="{{route('product.delete',['id_product' => $item->id])}}"><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            	<a href="{{route('product.edit',['id_product' => $item->id])}}"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
                            </td>
                        </tr>
                      @endforeach
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection