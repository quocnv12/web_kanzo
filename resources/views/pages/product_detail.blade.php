@extends('master-layout')
@section('title')
Chi tiết sản phẩm
@endsection
@section('share_link')
<meta property="og:image" content="images/{{$product_detail->image}}" />
<meta property="og:type" content="website" />
<meta property="og:url" content="{{route('product_detail', $product_detail->slug)}}" />
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="627">
<meta property="og:title" content="Sản phẩm - {{$product_detail->name}}" />
<meta property="og:description"   content="{{$product_detail->information}}" />

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
                              <img src="images/{{$product_detail->image}}" style="width:530px;height: 330px">
                            </div>
                            <div class="roww">
                              <div class="column">
                                <img class="demo cursor" src="images/{{$product_detail->image}}" style="width:100%;width: 90px;height: 90px" onclick="currentSlide(1)" alt="The Woods">
                              </div>
                              <!-- <div class="column">
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
                              </div> -->
                            </div>
                          </div>
            </div>
            <div class="col-md-6">
              <h5 class="row name-fruid">{{$product_detail->name}}</h6>
     
              <div class="row sale">
                  <h4 class="price">{{number_format($product_detail->price)}}</h4>
              </div>
              <p class="row attribute">
                <h4>* Tính năng sản phẩm</h4>
                <div class="text_description_product" style="font-size: 1em; font-weight: normal; font-family:arial;">
                   {!!$product_detail->information!!}
                </div>
                <h4>* Thông số kĩ thuật</h4>
                <div style="font-size: 1em; font-weight: normal; font-family:arial;">
                  {!!$product_detail->thongso!!}
                </div>
              </p>
              <div class="row add-to-cart">
                <button class="btn add-cart" type="button">Xem điểm bán</button>
                <button class="btn add-cart" type="button">Mua ngay</button>               
              </div>
              <div class="k5-sale">
                <div class="sale-p">
                  <p>
                      <i class="fas fa-share-square"></i> Chia sẻ:   
                      <!-- icon shareaholic: chia se bai viet len mang xa hoi -->
                      <span class="shareaholic-canvas" data-app="share_buttons" data-app-id="28752696" style="float:right;"></span>
                      <!-- icon shareaholic: chia se bai viet len mang xa hoi -->
                  </p> 
                </div>

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
          
          <div id="London" class="tabcontent"  style="font-size: 1em; font-weight: normal; font-family:arial;display:block;">
            
            {!!$product_detail->information!!}
          </div>
          
          <div id="Paris" class="tabcontent" style="font-size: 1em; font-weight: normal; font-family:arial;">
            
            {!!$product_detail->thongso!!}
          </div>
          
          <div id="Tokyo" class="tabcontent" style="font-size: 1em; font-weight: normal; font-family:arial;">
            {!!$product_detail->huongdan!!}
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
    @foreach($related_products as $item)
      <div class="col-md-3">
        <div class="product">
              <a href="{{route('product_detail', $item->slug)}}" style="">
                <div style="width:100%; height: auto;display: flex; min-height: 200px; justify-content: center;align-items: center;">
                  <img class="image-product" src="images/{{$item->image}}" style="width:100%;height: auto; outline: none;max-width: 100%;border: none;max-height: 100%;" alt="">
                </div>
                

                <div class="name-product" style="width:100%; height: auto;display: flex; min-height: 100px; justify-content: center;align-items: center;">
                  {{$item->name}}
                </div>
                <div class="hh">
                  {{number_format($item->price)}}
                </div>
              </a>
        </div>
      </div> 
    @endforeach
    </div>
  </center>
</section>
<section>
  <center class="container content-fainaly">
    <h1>SẢN PHẨM XEM NHIỀU NHẤT</h1>
    <p>Có 4 sản phẩm xem nhiều</p>
    <div class="row">
    @foreach($bestview_products as $item)
      <div class="col-md-3">
        <div class="product">
            <a href="{{route('product_detail', $item->slug)}}" >
              <div style="width:100%; height: auto;display: flex; min-height: 200px; justify-content: center;align-items: center;"><img class="image-product" src="images/{{$item->image}}" style="width:100%;height: auto; outline: none;max-width: 100%;border: none;max-height: 100%;" alt=""></div>
                

                <div class="name-product" style="width:100%; height: auto;display: flex; min-height: 100px; justify-content: center;align-items: center;">
                  {{$item->name}}
                </div>
                <div class="hh">
                  {{number_format($item->price)}}
                </div>
            </a>
        </div>
      </div> 
    @endforeach 
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

