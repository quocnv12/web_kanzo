@extends('master-layout')
@section('title')
Tìm kiếm
@endsection
@section('css')
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')
<script>
    new WOW().init();

</script>
@endsection

@section('content')

<div class="container ">
    <div class="row mt-5">
        <div class="col-md-9 mb-3" data-aos="fade-up" data-aos-delay="300">
			Có {{ count($product) }} sản phẩm được tìm thấy :
			<p></p>
            <div class="row">
					@foreach($product as $row)
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
                
        </div>
    </div>
</div>

@endsection
