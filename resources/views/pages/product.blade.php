@extends('master-layout')
@section('title')
Danh mục Sản phẩm
@endsection

@section('css')
<link rel="stylesheet" href="scss/home.css">
<link rel="stylesheet" href="css/product.css">
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')
<script>
	new WOW().init();
</script>
<script src="js/product.js"></script>
@endsection

@section('content')
<main>
	<div class="container">
		<div class="row">
			<div class="col-lg-3 slide-bar">
				<div class="list-product">
					<ul>
						<li class="title-list-product">Danh mục sản phẩm</li>
						@foreach($categorygl as $row)
						<li class="item-product-list"><a href="{{route('product',['slug'=>$row->slug])}}">{{$row->name}}<span><i class="fas fa-chevron-right"></i></span></a></li>
						@endforeach
						
					</ul>
				</div>
				<div class="img_intro">
			      	<img src="images/jj.jpg" class="mb-4 mt-2" style="width: 100%;">
			       	<img src="images/ff.jpg"  style="height:auto;width: 100%;">
			    </div>
    			<ul class="list-group mt-4">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #c18d28 ; color: white">Tin tức liên quan
                    </li>
                    @foreach($news as $item)
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                    <a href="{{route('new_detail', $item->slug)}}">
                                        <img src="images/{{$item->image}}" style="width: 100%">
                                    </a>
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail', $item->slug)}}"><span>{{$item->name}}</span></a>
                            </div>
                        </div>

                    </li>
                    @endforeach
                </ul>
			</div>
			<div class="col-lg-9">
				<div class="link">
					<a href="{{route('home')}}">Trang chủ</a>

					<span>/</span>
					<a href="{{route('product', $cats->slug)}}">{{$cats->name}}</a>
				</div>
				<hr>
				<div class="collect-product">
				    {{$cats->name}}
				</div>
				<hr>

				<div class="row">
					@foreach($products as $row)
					<div class="col-md-3">
						<div class="product">
							<a href="{{route('product_detail', $row->slug)}}">
								<img class="" src="images/{{$row->image}}" alt="">
								
								<div class="name-product">
									{{$row->name}}
								</div>
								<div class="hh">
									{{number_format($row->price)}}<sup>vnđ</sup>
								</div>
							</a>
						</div>
					</div>
					@endforeach
				</div>
		
                <div style="text-align: center">
                    {{$products->links()}}

                </div>

			</div>
		</div>
	</div>
</main>

@endsection