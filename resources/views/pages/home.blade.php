@extends('master-layout')
@section('title')
Trang chủ
@endsection

@section('css')
<link rel="stylesheet" href="scss/home.css">
@endsection

@section('js')
<script>
    new WOW().init();
    $(document).ready(function () {
        $('.demo').slick({
            infinite: false,
            slidesToShow: 3,
            slidesToScroll: 3
        });
    });

</script>
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
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <img src="images/slide1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img src="images/slide3.jpg" alt="Third slide">
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
    <section>
        <div class="img_hover">
            <div class="titleHead">
                <h2 class="reset"><span>Chào mừng đến với</span></h2>
                <div class="wrapperImg">
                    <img src="images/logo_footer.png" class=" lazyloaded" alt="KANZO">
                </div>
                <div class="slider demo">
                    <div class="item_slick">
                        <div class="img_slick">
                            <img src="images/sp4.png" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="{{route('product')}}">
                                <p>Bếp gas âm</p>
                            </a>
                        </div>
                    </div>
                    <div class="item_slick">
                        <div class="img_slick">
                            <img src="images/sp4.png" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="{{route('product')}}">
                                <p>Bếp từ</p>
                            </a>
                        </div>
                    </div>
                    <div class="item_slick">
                        <div class="img_slick">
                            <img src="images/sp4.png" alt="">
                        </div>
                        <div class="title_slick">
                            <a href="{{route('product')}}">
                                <p>Máy hút mùi</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <!-- about -->
        <section class="h-about-wrap all-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">

                        <div class="h-about-left">

                            <div class="h-about-title mb-4 wow slideInLeft">

                                <h2 class="font-bold text-center color-blue">Giới Thiệu Về Công Ty</h2>

                            </div>

                            <div class="h-about-content mb-2  text-justify wow slideInLeft">

                                <p style="font-size: 15px;">
                                    Công ty cổ phần điện tử KANZO Việt Nam hoạt động theo phương châm “Tin cậy, chất lương và hiệu quả”, luôn đặt chữ tín lên hàng đầu, vì vậy chúng tôi luôn ý thức được rằng chất lượng và tiến độ của dự án là một phần quan trọng, chính vì lẽ đó ngoài năng lực về quản lý, nhân sự, nhân lực, kỹ thuật, trang thiết bị, vấn đề tài chính luôn được công ty chú trọng hàng đầu. Chúng tôi luôn có kế hoạch tài chính hàng năm, hàng quý, hàng tháng và từng dự án, từng công việc cụ thể. Vì vậy, Công ty luôn chủ động trong việc thanh quyết toán mua nguyên vật liệu, các khoảng chi phí cũng như lương nhân công,... nhằm đảm bảo chất lượng dự án luôn thông suốt, đúng tiến độ.
                                </p>

                                <a href="{{route('intro')}}" class="btn-detail" style="border-radius: none;">Xem
                                    thêm</a>

                            </div>

                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class=" video1">
                            <div class="cap-mat">
                                <iframe width="100%" height="300px" src="https://www.youtube.com/embed/81G2nfiwe6U"
                                    frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

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
                <div class="col-md-3 item_product ">
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
                <div class="col-md-1"></div>
                <div class="col-md-3 item_product" style="margin-left: 5%;">
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
                <div class="col-md-1"></div>
                <div class="col-md-3 item_product" style="margin-left: 3%;">
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
            <div class="row hot_product2">
                <div class="col-md-5 item_product">
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
                <div class="col-md-2"></div>
                <div class="col-md-5 item_product">
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

        </section>

        <!-- new -->
        <section id="tintuc">
            <div class="container">
                <div class="row">
                    <!-- video về kanzo -->
                    <div class="col-md-6">
                        <div class="cap-main">
                            <h3 class="group__services-text">video về Kanzo</h3>
                        </div>
                        <div class="row video1">
                            <div class="col-md-6 cap-mat">
                                <iframe width="100%" src="https://www.youtube.com/embed/81G2nfiwe6U" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>Giới thiệu về bếp kanzo</h3>
                            </div>
                            <div class="col-md-6 cap-mat">
                                <iframe width="100%" src="https://www.youtube.com/embed/81G2nfiwe6U" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>Giới thiệu về bếp kanzo</h3>
                            </div>
                        </div>
                        <div class="row video2">
                            <div class="col-md-6 cap-mat">
                                <iframe width="100%" src="https://www.youtube.com/embed/81G2nfiwe6U" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>Giới thiệu về bếp kanzo</h3>
                            </div>
                            <div class="col-md-6 cap-mat">
                                <iframe width="100%" src="https://www.youtube.com/embed/81G2nfiwe6U" frameborder="0"
                                    allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                                <h3>Giới thiệu về bếp kanzo</h3>
                            </div>
                        </div>
                    </div>
                    <!-- tin tưc câu hỏi thg gặp -->
                    <div class="col-md-6">
                        <div class="cap-main">
                            <h3 class="group__services-text">câu hỏi thường gặp</h3>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md-9 cap-mat">
                                <a href="{{route('new_detail')}}">
                                    <h4>Giới thiệu về bếp kanzo</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, nesciunt fugit at
                                    voluptatibus explicabo molestiae expedita veniam atque autem reiciendis voluptatum
                                    placeat dolores totam, tenetur tempora quod natus hic soluta.</p>
                            </div>
                            <div class="col-md-3">
                                <a href="{{route('new_detail')}}">
                                    <img src="images/2.jpg" class="img-fluid" alt="">
                                </a>
                            </div>
                            <div class="col-md-9 cap-mat">
                                <a href="{{route('new_detail')}}">
                                    <h4>Giới thiệu về bếp kanzo</h4>
                                </a>
                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, nesciunt fugit at
                                    voluptatibus explicabo molestiae expedita veniam atque autem reiciendis voluptatum
                                    placeat dolores totam, tenetur tempora quod natus hic soluta.</p>
                            </div>
                        </div>
                        <!-- //tin tức và sự kiên -->
                        <div class="cap-main">
                            <h3 class="group__services-text1">tin tức và sự kiện</h3>
                        </div>
                        <div class="row">
                                <div class="col-md-3">
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-9 cap-mat">
                                    <a href="{{route('new_detail')}}">
                                        <h4>Giới thiệu về bếp kanzo</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, nesciunt fugit at
                                        voluptatibus explicabo molestiae expedita veniam atque autem reiciendis voluptatum
                                        placeat dolores totam, tenetur tempora quod natus hic soluta.</p>
                                </div>
                                <div class="col-md-3">
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/2.jpg" class="img-fluid" alt="">
                                    </a>
                                </div>
                                <div class="col-md-9 cap-mat">
                                    <a href="{{route('new_detail')}}">
                                        <h4>Giới thiệu về bếp kanzo</h4>
                                    </a>
                                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Nulla, nesciunt fugit at
                                        voluptatibus explicabo molestiae expedita veniam atque autem reiciendis voluptatum
                                        placeat dolores totam, tenetur tempora quod natus hic soluta.</p>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</main>
@endsection