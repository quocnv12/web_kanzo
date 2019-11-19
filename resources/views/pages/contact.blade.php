@extends('master-layout')
@section('title')
Liên hệ
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
  <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">LIÊN HỆ</h2>
  <div class="h-category-banner-black">

  </div>
</div>
  </div>
</section>
<section>
<div class="jumbotron text-center">
  <h3>Liên Hệ Với Kanzo</h3>
</div>
<div class="container">
  <div class="row hihih">
    <div class="col-sm-3 text-center ">
	<a href=""><i class="fas fa-2x fa-map-marker-alt mb-3 "></i></a>
	  <h3>Trụ sở chính</h3>
      <p>Số 8 biệt thự 10,khu đô thị Vân Canh,Xã Vân Canh,huyện Hoài Đức thành phố Hà Nội</p>
     
    </div>
    <div class="col-sm-3 text-center">
    	<a href=""><i class="fas fa-2x fa-phone mb-3"></i></a>
      <h3>Liên hệ online</h3>
      <p>0243.233.3311</p>
     
      
    </div>
    <div class="col-sm-3 text-center">
    	<a href=""><i class="fas fa-2x fa-fax  mb-3"></i></a>
      <h3>Số fax</h3>        
      <p>0243.233.3311</p>
      
    </div>
    <div class="col-sm-3 text-center">
    	<a href=""><i class="fas fa-2x fa-envelope mb-3"></i></a>
      <h3>Email</h3>        
      <p>Kanzo.anhtuan@gmail.com</p>
      
    </div>
  </div>
</div>
<div class="lienhe mt-4">
<div class="container mt-4 cutte">
	<div class="row">
		<div class="col-md-1 col-sm-0"></div>
		<div class="col-md-5 col-sm-12">
			<div class="container">
				<h2>Gửi đến chúng tôi</h2>
         <form action="/action_page.php">
         	<div class="form-group">
      <label for="email">Họ và tên</label>
      <input type="text" class="form-control" id="name" placeholder="tên chủa bạn" name="name">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder=" email của bạn" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Số điện thoại</label>
      <input type="text" class="form-control" id="pwd" placeholder="số điện thoại của bạn" name="pswd">
    </div>
    <div class="form-group">
      <label for="pwd">Địa chỉ cụ thể</label>
      <input type="text" class="form-control" id="pwd" placeholder="Địa chỉ nơi bạn sinh sống" name="pswd">
    </div>
       <button type="submit" class="btn btn-primary">Gửi</button>
  </form>
			</div>
		</div>
		<div class="col-md-6 col-sm-12">
		   <div class="banner_contract">
		   	<div class="container">
		   		<h2 style="margin-bottom: 15px;">Chi nhánh chúng tôi</h2>
		   		<img src="images/ll.jpg">
		   	</div>
		   </div>
		</div>
		<!-- <div class="col-md-1 col-sm-0"></div> -->
	</div>
</div>
</div>
</section>

@endsection