@extends('master-layout')
@section('title')
Chi tiết khuyến mại
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
<div class="container-fruid">
    <div class="h-category-banner">
        <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">CHI TIẾT KHUYẾN MẠI</h2>
        <div class="h-category-banner-black">
        </div>
    </div>
</div>
<section>


    <div class="container ">
        <div class="row mt-5">
            <div class="col-md-9 mb-3" data-aos="fade-up" data-aos-delay="300">
                <ul class="list-group">
                    <li class="list-group-item active text-center font-weight-bold">{{ $promotion->summary }}</li>
                    <li class="list-group-item">
                        <style type="text/css">
                            .list-group-item img {
                                width: 100% !important;
                                height: auto !important;
                            }

                            .list-group-item p {
                                font-weight: 600;
                                padding: 5px 0 5px 0;
                            }

                            .list-group-item span {
                                padding: 5px 0 0 0;
                            }

                            .list-group-item.active {
                                background-color: #c18d28 !important;
                                border: none;
                            }

                        </style>
                        {!! $promotion->content !!}

                    </li>
                </ul>

                <div class="container row k5-tag">
                    <div class="col-md-6 tag-1">
                        <span class="tag">
                            <strong><i class="fas fa-tags"></i> Tag:</strong>
                        </span>
                        <a href="#">Content</a>
                        <a href="#">SEO</a>
                    </div>
                    <div class="col-md-6 k5-sale" style="">
                        <div class="sale-p">
                            <p><i class="fas fa-share-square"></i> Chia sẻ:</p>
                        </div>
                        <div class="sale-icon">
                            <a href="#"><i class="fab fa-facebook-square" title="facebook"></i></a>
                            <a href="#"><i class="fab fa-instagram" title="instagram"></i></a>
                            <a href="#"><i class="fab fa-pinterest-square" title="printerest"></i></a>
                            <a href="#"><img src="images/zalo-icon.png" alt="" title="zalo"></a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- cột 3 -->
            <div class="col-md-3 tin-tuc-content" data-aos="fade-up" data-aos-delay="400">
                <ul class="list-group">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #c18d28 ; color: white">TIN MỚI
                    </li>

                    @foreach ($news as $item)
                        <li class="list-group-item">
                            <div class="row naa">
                                <div class="col-md-4 " style="padding:0">

                                    <a href="tin-tuc/{{ $item->slug }}">
                                        <img src="images/{{ $item->image }}" style="width: 100%">
                                    </a>

                                </div>
                                <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                    <a style="color: inherit;text-decoration: none;color: #505050;"
                                        href="tin-tuc/{{ $item->slug }}"><span>{{ $item->name }}</span></a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                    {{--  <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">

                                <a href="">
                                    <img src="images/6.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">

                                <a href="">
                                    <img src="images/3.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">

                                <a href="">
                                    <img src="images/1.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">

                                <a href="">
                                    <img src="images/2.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">

                                <a href="">
                                    <img src="images/4.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>  --}}

                </ul>
                <ul class="list-group mt-4 ">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #c18d28 ; color: white">SẢN Phẩm Nổi bật
                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class=" " style="padding:0">

                                    @foreach ($product as $item)
                                    <a href="product_detail/{{ $item->slug }}">
                                        <img src="images/{{ $item->image }}" style="width: 100%" class="mb-4">
                                    </a>
                                    @endforeach
                                {{--  <a href="">
                                    <img src="images/2.jpg" style="width: 100%" class="mb-4">
                                </a>
                                <a href="">
                                    <img src="images/ok.jpg" style="width: 100%" class="mb-4">
                                </a>  --}}

                            </div>

                        </div>

                    </li>

                </ul>

            </div>

        </div>
    </div>
</section>

@endsection
