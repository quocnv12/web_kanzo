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
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-3 slide-bar">
				<div class="list-product">
					<ul>
						<li class="title-list-product">Danh mục sản phẩm</li>
						<li class="item-product-list"><a href="{{route('product')}}">Bếp ga âm <span><i class="fas fa-chevron-right"></i></span></a></li>
						<li class="item-product-list"><a href="{{route('product')}}">Bếp từ<span><i class="fas fa-chevron-right"></i></span></a></li>
						<li class="item-product-list"><a href="{{route('product')}}">Máy hút mùi<span><i class="fas fa-chevron-right"></i></span></a></li>
						
					</ul>
				</div>
				<div class="img_intro">
      <img src="images/jj.jpg" class="mb-4 mt-2" style="width: 100%;">
       <img src="images/ff.jpg"  style="height: 300px;    width: 100%;">
    </div>
    <ul class="list-group mt-4">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #c18d28 ; color: white">TIN Tức mới nhất
                    </li>
                        <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/1.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/6.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                  <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/5.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/2.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/4.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                </ul>
			</div>
			<div class="col-lg-9">
				<div class="link">
					<a href="{{route('home')}}">Trang chủ</a>
					<span>></span>
					<a href="{{route('product')}}">Sản phẩm</a>
				</div>
				<hr>
				<div class="collect-product">
				Bếp ga âm
				</div>
				<hr>

				<div class="row ">
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
				</div>
				<div class="row ">
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
					<div class="col-md-3">
						<div class="product">
						<a href="{{route('product_detail')}}">
							<img class="image-product" src="images/bt1.jpg" alt="">
							
							<div class="name-product">
								Bếp từ maboshi 2 mặt
							</div>
							<div class="hh">
								129.000
							</div>
						</a>
						</div>
					</div>
				</div>
				
					<ul class="tab">
						<li><a href="#" class="active">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#" class="vvsv">...</a></li>
						<li><a href="#">10</a></li>
						<li><a href="#">>></a></li>
					</ul>
				
			</div>
		</div>
	</div>
</main>

@endsection