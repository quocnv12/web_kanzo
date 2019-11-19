@extends('admins.layout.master')
@section('category','active')
@section('title','Danh sách Loại San phẩm')
<!-- @section('introduce','active') -->
@section('content')

<div>
	<div class="page-title">
        <h3>Loại sản phẩm - <span class="semi-bold">Danh sách</span>
        </h3>
    </div>
    <ul class="breadcrumb">
        <li><a href="{{Route('category.add')}}" class="active"><input type="button" class="btn btn-success" value="Thêm Loại sản phẩm"></a> </li>
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
        @if(session('thongbaoloi'))
            <div class="alert alert-danger">
                {{session('thongbaoloi')}}
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
                            <th>Tên loại sản phẩm</th>
                            <th>Slug</th>
                            <th>Trạng thái</th>
                            <th>Hoạt động</th>
                        </tr>
                    </thead>
                    <tbody>
                   	  @foreach($category as $item)
                        <tr class="odd gradeX">
                            <td>{{$item->name}}</td>
                            <td>{{$item->slug}}</td>
                            <td>
                                @if($item->active == 1)
                                    Hiển thị
                                @else
                                    Ẩn
                                @endif
                            </td>
                            <td class="center">
                            	<a href="{{route('category.delete',['id_category' => $item->id])}}"><button class="btn btn-danger"><i class="fa fa-trash-o" aria-hidden="true"> </i></button></a>
                            	<a href="{{route('category.edit',['id_category' => $item->id])}}"><button class="btn btn-success"><i class="fa fa-pencil-square-o" aria-hidden="true"> </i></button></a>
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