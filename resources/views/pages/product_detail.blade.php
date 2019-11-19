@extends('master-layout')
@section('title')
Chi tiết sản phẩm
@endsection

@section('css')

<link rel="stylesheet" type="text/css" href="css/rema.css">
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')
<script>
	new WOW().init();

</script>
<script src="js/product-detail.js"></script>
@endsection

@section('content')

<section>
  <div class="container-fruid">
   <div class="h-category-banner">
  <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">CHI TIẾT SẢN PHẨM</h2>
  <div class="h-category-banner-black">

  </div>
</div>
  </div>
</section>
<section>

    <div class="container content-main">
        <div class="row">
            <div class="col-md-6">
                    <div class="contailer">
                            <div class="mySlides"yy>
                              <img src="images/ok.jpg" style="width:530px;height: 330px">
                            </div>
                            <div class="mySlides">
                              <img src="images/bt1.jpg" style="width:530px;height: 330px">
                            </div>
                            <div class="mySlides">
                              <img src="images/1.jpg" style="width:530px;height: 330px">
                            </div>
                              
                            <div class="mySlides">
                              <img src="images/ok.jpg" style="width:530px;height: 330px" >
                            </div>
                            <div class="mySlides">
                              <img src="images/bt1.jpg" style="width:530px;height: 330px" >
                            </div>
                            <div class="roww">
                              <div class="column">
                                <img class="demo cursor" src="images/ok.jpg" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(1)" alt="The Woods">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="images/bt1.jpg" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(2)" alt="Cinque Terre">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="images/1.jpg" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(3)" alt="Mountains and fjords">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="images/ok.jpg" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(4)" alt="Northern Lights">
                              </div>
                              <div class="column">
                                <img class="demo cursor" src="images/bt1.jpg" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(5)" alt="Nature and sunrise">
                              </div>
                            </div>
                          </div>
            </div>
            <div class="col-md-6">
              <h5 class="row name-fruid">KZ-ECO-6666-GAS Japan Technology</h6>
     
              <div class="row sale">
                  <h4 class="price">3900000</h4>
              </div>
              <p class="row attribute">
               <h4>* Tính năng sản phẩm</h4>
               <ul>
                   <li>Mâm chia lửa bằng đồng</li>
                  <li>Chế độ tiết kiệm gas</li>
                   <li>Mặt kính cường lực, chịu nhiệt, dày 8mm</li>
                   <li>Cảm biến an toàn tự động khóa gas</li>
                   <li>Khay Inox 304, bát, pép chia lửa bằng đồng</li>
                   <li>Hệ thống đánh lửa I/C (pin)</li>
                   <li>Họng bếp đồng chống kết dính khi sử dụng</li>
                 </ul>
              <h4>* Thông số kĩ thuật</h4>
              <ul>
                   <li>Kích thước mặt kính : 750x430mm</li>
                   <li>Kích thước khoét đá: 650x350mm</li>
                   <li>Công suất : 3.0 KW + 3.0 KW</li>
                 </ul>
              </p>
              <div class="row add-to-cart">
                <button class="btn add-cart" type="button">Xem điểm bán</button>
                <button class="btn add-cart" type="button">Mua ngay</button>
                
              </div>
              
            </div>
        </div>
        
    </div>
    <div class="container">
    <div class="row">
          <div class="tab">
            <button class="tablinks active" onclick="openCity(event, 'London')" style="border: none;outline: none;">Thông tin sản phẩm</button>
            <button class="tablinks" onclick="openCity(event, 'Paris')" style="border: none;outline: none;">Thông số kĩ thuật</button>
            <button class="tablinks" onclick="openCity(event, 'Tokyo')" style="border: none;outline: none;">Hướng dẫn sử dụng</button>
          </div>
          
          <div id="London" class="tabcontent" style="display:block;">
            
            <ul style="margin: 2rem 0rem 1rem 0rem;">
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Mâm chia lửa bằng đồng</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Chế độ tiết kiệm gas</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Mặt kính cường lực, chịu nhiệt, dày 8mm</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Khay Inox 304, bát, pép chia lửa bằng đồng</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Hệ thống đánh lửa I/C (pin)</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Hệ thống đánh lửa I/C (pin)</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Họng bếp đồng chống kết dính khi sử dụng</li>
            </ul>
          </div>
          
          <div id="Paris" class="tabcontent">
            
            <ul style="margin: 2rem 0rem 1rem 0rem;">
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Kích thước mặt kính : 750x430mm</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Kích thước khoét đá: 650x350mm</li>
              <li><i class="fa fa-check" aria-hidden="true" style="color:#c18d28;margin-right: 5px"></i>Công suất : 3.0 KW + 3.0 KW</li>
              
            </ul>
          </div>
          
          <div id="Tokyo" class="tabcontent">
            <p>Khi lắp đặt bếp gas, cần để bếp cách xa tường tối thiểu 15 cm, nếu phía trên bếp gas có kệ, thì nên đặt kệ cách xa bếp gas ít nhất 1 mét. Nên đặt bếp gas trên một kệ cố định, và kệ này cách mặt đất tối thiểu 1 mét. Việc này giúp cho không gian xung quanh bếp gas thông thoáng hơn, tránh cháy nổ.<br/>

Bên cạnh đó, nên đặt bếp gas ở nơi thoáng mát, nhưng không nên đặt bếp gas ở nơi có gió lùa (cửa sổ, gần quạt máy…) để tránh lửa bị tắt, hao phí gas.<br/>

Dây dẫn gas luôn được nối chắc chắn, khít, để tránh xì gas, nên để ý đường dây để tránh dây bị xoắn, làm gas không lên đều.</p>
          </div>
        </div>
    </div>
    </div>
</section>
<section>
  <center class="container content-fainaly">
    <h1>SẢN PHẨM LIÊN QUAN</h1>
    <p>Có 4 sản phẩm liên quan</p>
    <div class="row">
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
    <div class="col-md-3 ">
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
    <div class="col-md-3 ">
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
    <div class="col-md-3 ">
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
  </center>
</section>
<section>
  <center class="container content-fainaly">
    <h1>SẢN PHẨM XEM NHIỀU NHẤT</h1>
    <p>Có 4 sản phẩm xem nhiều</p>
    <div class="row">
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
    <div class="col-md-3 ">
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
    <div class="col-md-3 ">
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
    <div class="col-md-3 ">
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
  </center>
</section>
<script>
  $(document).ready(function(){
    $(".li-size-1").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-2").css("color","#212529");
      $(".li-size-2").css("border","2px solid #ebebeb");
      $(".li-size-3").css("color","#212529");
      $(".li-size-3").css("border","2px solid #ebebeb");
    });
    $(".li-size-2").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-1").css("color","#212529");
      $(".li-size-1").css("border","2px solid #ebebeb");
      $(".li-size-3").css("color","#212529");
      $(".li-size-3").css("border","2px solid #ebebeb");
    });
    $(".li-size-3").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-2").css("color","#212529");
      $(".li-size-2").css("border","2px solid #ebebeb");
      $(".li-size-1").css("color","#212529");
      $(".li-size-1").css("border","2px solid #ebebeb");
    });
    $(".li-size-s").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-m").css("color","#212529");
      $(".li-size-m").css("border","2px solid #ebebeb");
      $(".li-size-l").css("color","#212529");
      $(".li-size-l").css("border","2px solid #ebebeb");
      $(".li-size-xl").css("color","#212529");
      $(".li-size-xl").css("border","2px solid #ebebeb");
    });
    $(".li-size-m").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-s").css("color","#212529");
      $(".li-size-s").css("border","2px solid #ebebeb");
      $(".li-size-l").css("color","#212529");
      $(".li-size-l").css("border","2px solid #ebebeb");
      $(".li-size-xl").css("color","#212529");
      $(".li-size-xl").css("border","2px solid #ebebeb");
    });
    $(".li-size-l").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-m").css("color","#212529");
      $(".li-size-m").css("border","2px solid #ebebeb");
      $(".li-size-s").css("color","#212529");
      $(".li-size-s").css("border","2px solid #ebebeb");
      $(".li-size-xl").css("color","#212529");
      $(".li-size-xl").css("border","2px solid #ebebeb");
    });
    $(".li-size-xl").click(function(){
      $(this).css("color","#86ba09");
      $(this).css("border","2px solid #86ba09");
      $(".li-size-m").css("color","#212529");
      $(".li-size-m").css("border","2px solid #ebebeb");
      $(".li-size-l").css("color","#212529");
      $(".li-size-l").css("border","2px solid #ebebeb");
      $(".li-size-s").css("color","#212529");
      $(".li-size-s").css("border","2px solid #ebebeb");
    });
  });
  // tab
  function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
}
  </script>
@endsection

