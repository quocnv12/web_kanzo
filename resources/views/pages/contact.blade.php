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
</section>
<section class="container">
    <div class="row hihih">
        <div class="col-sm-3 text-center ">
            <a href=""><i class="fas fa-2x fa-map-marker-alt mb-3 "></i></a>
            <h3>Trụ sở chính</h3>
            <p>{{ $contact->address }}</p>

        </div>
        <div class="col-sm-3 text-center">
            <a href=""><i class="fas fa-2x fa-phone mb-3"></i></a>
            <h3>Liên hệ online</h3>
            <p>{{ $contact->phone }}</p>


        </div>
        <div class="col-sm-3 text-center">
            <a href=""><i class="fas fa-2x fa-fax  mb-3"></i></a>
            <h3>Số fax</h3>
            <p>{{ $contact->fax }} </p>

        </div>
        <div class="col-sm-3 text-center">
            <a href=""><i class="fas fa-2x fa-envelope mb-3"></i></a>
            <h3>Email</h3>
            <p>{{ $contact->email }}</p>

        </div>
    </div>
    <div class="lienhe mt-4">
       
        <div class="container mt-4 cutte">
                @if (session('thongbao'))
                <script>
                    alert('{{ session('thongbao') }}')
                </script>
            @endif
            <div class="row">
                <div class="col-md-1 col-sm-0"></div>
                <div class="col-md-5 col-sm-12">
                    <div class="container">
                        <h2>Gửi đến chúng tôi</h2>
                        <form action="contact" method="POST">
                          @csrf
                            <div class="form-group">
                                <label for="email">Họ và tên :</label>
                                <input type="text" class="form-control" id="name" placeholder="Tên của bạn"
                                    name="name">
                                    {!! ShowError($errors,'name') !!}
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="email" class="form-control" id="email" placeholder=" Email của bạn"
                                    name="email">
                                    {!! ShowError($errors,'email') !!}
                            </div>
                            <div class="form-group">
                                <label for="pwd">Số điện thoại :</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Số điện thoại của bạn"
                                    name="phone">
                                    {!! ShowError($errors,'phone') !!}
                            </div>
                            <div class="form-group">
                                <label for="pwd">Địa chỉ cụ thể :</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Địa chỉ nơi bạn sinh sống"
                                    name="address">
                                    {!! ShowError($errors,'address') !!}
                            </div>
                            <div class="form-group">
                              <label for="pwd">Nội dung :</label>
                             <textarea class="form-control" name="content" style="height:120px" placeholder="Nhập nội dung" id="" cols="30" rows="10"></textarea>
                             {!! ShowError($errors,'content') !!}
                            </div>
                            <button type="submit"  class="btn btn-primary">Gửi</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <div class="banner_contract">
                        <div class="container">
                            <h2 style="margin-bottom: 15px;">Chi nhánh chúng tôi</h2>
                            <img  src="images/ll.jpg">
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-1 col-sm-0"></div> -->
            </div>
        </div>
    </div>
    <div class="row k5-tag">
        <div class="col-md-6 tag-1">
          <span class="tag">
            <strong><i class="fas fa-tags"></i> Tag:</strong>
          </span>
          <a href="#">Content</a>
          <a href="#">SEO</a>
        </div>
        <div class="col-md-6 k5-sale" style="">
            <div class="sale-p"><p><i class="fas fa-link"></i> Liên kết với Kanzo: </p></div>
            <div class="sale-icon">                 
              <a href="#"><i class="fab fa-facebook-square" title="facebook"></i></a>
              <a href="#"><i class="fab fa-instagram" title="instagram"></i></a>
              <a href="#"><i class="fab fa-pinterest-square" title="printerest"></i></a>
              <a href="#"><img src="images/zalo-icon.png" alt=""title="zalo"></a>
            </div>
        </div>
    </div>
</section>

@endsection
