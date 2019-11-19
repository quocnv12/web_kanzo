@extends('master-layout')
@section('title')
Điểm bán
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
<section>
	
<div class="container-fruid">
   <div class="h-category-banner">
  <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">HỆ THỐNG PHÂN PHỐI VÀ CÁC ĐẠI LÍ</h2>
  <div class="h-category-banner-black">

  </div>
</div>
  </div>
</section>
<section>
	<div class="diemban mt-4">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<div class="panel panel-primary" id="result_panel">
    <div class="panel-heading"><h4 class="panel-title" style="text-align: center;margin-bottom: 35px;">DANH SÁCH CÁC ĐẠI LÍ</h4>
    </div>
        <div class="scrollbar" id="style-10">
    	<div class="force-overflow">
        <ul class="list-group">
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>Số 5 Cầy Giấy Hà nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>160 Tây Hồ Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 247 Thanh Xuân Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>91 Ba Đình Hà Nội 100000</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i>2  Đống Đa Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 247 Khương Trung, Thanh Xuân, Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
            <li class="list-group-item"><i class="fas fa-map-marker-alt"></i> 62 Hoàn Kiếm  Hà Nội</li>
        </ul>
    </div>
</div>
</div>
				</div>
				<div class="col-md-8 col-sm-12">
					 <div class="alert alert-secondary">
                     <form class="search">
                     	 <input type="text" name="" class="btn" placeholder="Tỉnh/thành phố">
                     	 <input type="text" name="" class="btn" placeholder="Nhập quận huyện">
                     	  <button type="button" class="btn" style="">Tìm kiếm</button>
                     </form>
                     </div>
                     <div class="container mapppp center" >
                     	<img src="images/55.jpg" style="width: 100%">
                     </div>
				</div>
			</div>
		</div>
	</div>
</section>

@endsection