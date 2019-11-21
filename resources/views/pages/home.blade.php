@extends('master-layout')
@section('title')
Trang chủ
@endsection

@section('css')
@endsection

@section('content')

<div class="popup" id="popup">
    <div class="txt_icon">
        <div class="icon">
            <div class="txt1">
                <i class="fa fa-times"></i><span> Đóng</span>
            </div>
            <div class="txt2">
                <h4> Chương trình khuyến mãi của Bếp từ ABC của Kanzo</h4>
            </div>
            <img src="images/slide2.jpg" class="img-fluid" alt="">
        </div>
    </div>
</div>

<main>
    <!-- slider -->
    <section id="slider">
        <div id="carouselId" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                <li data-target="#carouselId" data-slide-to="1"></li>
                <li data-target="#carouselId" data-slide-to="2"></li>
                <li data-target="#carouselId" data-slide-to="3"></li>
                <li data-target="#carouselId" data-slide-to="4"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/md_cg243tf_slg_073018_2.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/KALEA_27_Fuochi_resized-1-1400x655.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/sm_cg365p_vw36s_rmd_43015_2048x@2x.webp" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img src="images/ideas-down-pro-oven-kitchenaid-electric-designs-island-thermador-gumtree-range-cooktop-islands-for-inch-gas-inductio-whirlpool-kitchen-combo-stoves.jpg" alt="Third slide">
                </div>
                <div class="carousel-item">
                    <img src="images/-blank-design-studio-mstekio-3p-engineering-render-configurazioni29-2000x1125.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselId" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselId" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </section>
    <!-- images-hover -->
    <section class="container-fluid">
        <div class="img_hover ">
            <div class="titleHead container">
                <div class="slide_bottom_banner_product owl-carousel owl-theme">
                    <div class="item">
                        <div class="img_slick">
                            <img src="images/image4.jpg" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="">Bếp gas âm</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_slick">
                            <img src="images/image4.jpg" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="">Bếp từ</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_slick">
                            <img src="images/image4.jpg" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="">Máy hút mùi</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_slick">
                            <img src="images/image4.jpg" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="">Máy hút mùi</a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="img_slick">
                            <img src="images/image4.jpg" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="">Máy hút mùi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <!-- product -->
        <section id="bepgas">
            <div class="cap-main">
                <h3 class="group__services-text">Sản phẩm nổi bật</h3>
                <div class="cap_title">
                    <p>Với mạng lưới 60 điểm bán, sản xuất kinh doanh hơn 500 nhóm sản phẩm gia dụng thiết yếu, sản phẩm
                        Kanzo đã có mặt tại toàn bộ hệ thống siêu thị, trung tâm thương mại, các cửa hàng truyền thống
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="item_product ">
                        <div class="item">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO ">
                                <img src="images/sp4.png" alt="Bếp gas âm cao cấp KANZO ">
                            </a>
                        </div>
                        <div class="cap-mat">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO SHB6636">
                                <h3>Bếp gas âm cao cấp KANZO ABCDEFGH</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_product" >
                        <div class="item">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO ">
                                <img src="images/sp4.png" alt="Bếp gas âm cao cấp KANZO ">
                            </a>
                        </div>
                        <div class="cap-mat">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO SHB6636">
                                <h3>Bếp gas âm cao cấp KANZO ABCDEFGH</h3>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="item_product" >
                        <div class="item">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO ">
                                <img src="images/sp4.png" alt="Bếp gas âm cao cấp KANZO ">
                            </a>
                        </div>
                        <div class="cap-mat">
                            <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO SHB6636">
                                <h3>Bếp gas âm cao cấp KANZO ABCDEFGH</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row hot_product2">
                <div class="col-md-6">
                    <div class="item_product">
                        <div class="row">
                            <div class="col-md-7 cap-mat">
                                <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO SHB6636">
                                    <h3>Bếp gas âm cao cấp KANZO ABCDEFGH</h3>
                                </a>
                            </div>
                            <div class=" col-md-5 item">
                                <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO ">
                                    <img src="images/sp4.png" alt="Bếp gas âm cao cấp KANZO ">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="item_product">
                        <div class="row">
                            <div class="col-md-7 cap-mat">
                                <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO SHB6636">
                                    <h3>Bếp gas âm cao cấp KANZO ABCDEFGH</h3>
                                </a>
                            </div>
                            <div class=" col-md-5 item">
                                <a href="{{route('product_detail')}}" title="Bếp gas âm cao cấp KANZO ">
                                    <img src="images/sp4.png" alt="Bếp gas âm cao cấp KANZO ">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <!-- new -->
        <section id="tintuc">
            <div class="container">
                <div class="row">
                    <!-- video về kanzo -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-8">
                        <div class="cap-main">
                            <h3 class="group__services-text">video về Kanzo</h3>
                        </div>
                        <div class="silde_video_kanzo owl-carousel owl-theme">
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 450px;object-fit: cover;" controls>
                                  <source src="video/The Siemens Gas Cooktops.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 450px;object-fit: cover;" controls>
                                  <source src="video/Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 450px;object-fit: cover;" controls>
                                  <source src="video/Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <!-- tin tưc câu hỏi thg gặp -->
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-4 cau_hoi_thuong_gap_home">
                        <div class="cap-main">
                            <h3 class="group__services-text">câu hỏi thường gặp</h3>
                        </div>
                        <div class="cau_hoi_thuong_gap_home_box">
                            <div class="cau_hoi_thuong_gap_home_box_item">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                    <span>Những câu hỏi thường gặp về máy xay sinh tố Kanzo.</span>
                                    <b><i class="fas fa-history"></i>20/11/2019</b>
                                </a>
                            </div>
                            <div class="cau_hoi_thuong_gap_home_box_item">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                    <span>Những câu hỏi thường gặp về máy xay sinh tố Kanzo.</span>
                                    <b><i class="fas fa-history"></i>20/11/2019</b>
                                </a>
                            </div>
                        </div>
                        <!-- //tin tức và sự kiên -->
                        <div class="cap-main" style="clear: both;">
                            <h3 class="group__services-text1">tin tức và sự kiện</h3>
                        </div>
                        <div class="cau_hoi_thuong_gap_home_box">
                            <div class="cau_hoi_thuong_gap_home_box_item">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                    <span>Những câu hỏi thường gặp về máy xay sinh tố Kanzo.</span>
                                    <b><i class="fas fa-history"></i>20/11/2019</b>
                                </a>
                            </div>
                            <div class="cau_hoi_thuong_gap_home_box_item">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                    <span>Những câu hỏi thường gặp về máy xay sinh tố Kanzo.</span>
                                    <b><i class="fas fa-history"></i>20/11/2019</b>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- about -->
        <section class="h-about-wrap all-wrap gioi_thieu_home">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">

                        <div class="h-about-left">

                            <div class="h-about-title mb-4 wow slideInLeft">

                                <h2 class="font-bold text-center color-blue">Giới Thiệu Về Công Ty</h2>

                            </div>

                            <div class="h-about-content mb-2  text-justify wow slideInLeft">

                                <p style="">
                                    Công ty cổ phần điện tử KANZO Việt Nam hoạt động theo phương châm “Tin cậy, chất lương và hiệu quả”, luôn đặt chữ tín lên hàng đầu, vì vậy chúng tôi luôn ý thức được rằng chất lượng và tiến độ của dự án là một phần quan trọng, chính vì lẽ đó ngoài năng lực về quản lý, nhân sự, nhân lực, kỹ thuật, trang thiết bị, vấn đề tài chính luôn được công ty chú trọng hàng đầu. Chúng tôi luôn có kế hoạch tài chính hàng năm, hàng quý, hàng tháng và từng dự án, từng công việc cụ thể. Vì vậy, Công ty luôn chủ động trong việc thanh quyết toán mua nguyên vật liệu, các khoảng chi phí cũng như lương nhân công,... nhằm đảm bảo chất lượng dự án luôn thông suốt, đúng tiến độ.
                                </p>

                                <a href="" class="btn-detail" style="border-radius: none;">Xem
                                    thêm</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-6">
                        <div class="silde_video_kanzo_gioi_thieu owl-carousel owl-theme">
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 320px;object-fit: cover;" controls>
                                  <source src="video/The Siemens Gas Cooktops.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 320px;object-fit: cover;" controls>
                                  <source src="video/Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4" type="video/mp4">
                                </video>
                            </div>
                            <div class="silde_video_kanzo_item">
                                <video style="width: 100%;height: 320px;object-fit: cover;" controls>
                                  <source src="video/Xiaomi DCL01CM Precise Control Induction Cooker Review - very advanced.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </div>
</main>
@endsection

@section('js')
<script type="text/javascript">
    new WOW().init();
    $(document).ready(function () {
        $('.demo').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });
    $('.slide_bottom_banner_product').owlCarousel({
        loop:true,
        margin:10,
        autoplay:true,
        nav:false,
        smartSpeed:450,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
    $('.silde_video_kanzo').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsiveClass:true,
        smartSpeed:450,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
    $('.silde_video_kanzo_gioi_thieu').owlCarousel({
        loop:true,
        margin:10,
        nav:false,
        responsiveClass:true,
        smartSpeed:450,
        dots:false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
</script>
@endsection