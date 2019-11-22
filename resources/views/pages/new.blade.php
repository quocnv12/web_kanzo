@extends('master-layout')
@section('title')
Tin tức
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')
<script>
    new_detail WOW().init();

</script>
@endsection

@section('content')

<section>

    <div class="container-fruid">
        <div class="h-category-banner">
            <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">TIN TỨC</h2>
            <div class="h-category-banner-black">

            </div>
        </div>
    </div>
    <div class="container ">
        <div class="row mt-5">

            <!-- cột bên trái -->
            <div class="col-md-9 " data-aos="fade-up" data-aos-delay="100">
                <ul class="nav nav-tabs codong-tt" id="myTab" role="tablist">
                    <!-- <li class="nav-item">
                            <a class="nav-link" id="home-tab-1" data-toggle="tab"  role="tab"
                               aria-controls="home-1" aria-selected="true">
                            </a>
                        </li>
 -->
                    <li class="nav-item">
                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                            aria-controls="home" aria-selected="true">Tin tức
                        </a>
                    </li>
                    <!--  <li class="nav-item">
                        <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab"
                          aria-controls="contact" aria-selected="false">Tin tức trong ngành</a>
                    </li> -->
                </ul>

                <!-- tin tức nội bộ -->
                <div class="tab-content" id="myTabContent" data-aos="fade-up" data-aos-delay="200">

                    <div class="tab-pane fade show active " id="" role="tabpanel" aria-labelledby="home-tab-1">

                        <!-- <hr class="w-100 my-3"> -->
                        <div class="row mt-3 codong-ct active" data-aos="fade-up" data-aos-delay="200">


                            <div class="single-blog-area mb-2 mr-3 ml-4 wow fadeInUp">

                                @foreach ($news as $item)
                                <div class="row new_row">
                                    <div class="col-md-4">

                                        <div class="thumbnail text-center">
                                            <a href="tin-tuc/{{ $item->slug }}"> <img src="images/{{ $item->image }}"
                                                    alt="" style="width:100%;"></a>
                                        </div>
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="tin-tuc/{{ $item->slug }}" class="blog-headline">
                                            <h5>{{ $item->name }}</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            {{ $item->created_at->format('d-m-Y') }}
                                        </div>
                                        <a href="tin-tuc/{{ $item->slug }}" class="ccc">
                                            <p>{{ $item->summary }}</p>
                                        </a>
                                        <a href="tin-tuc/{{ $item->slug }}" class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp
                                        </a>
                                    </div>
                                </div>

                                @endforeach

                            </div>
                        </div>


                    </div>
                </div>
            </div>


            <!-- cột bên phải -->
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

                                <a href="{{route('new_detail')}}">
                                    <img src="images/3.jpg" style="width: 100%">
                                </a>



                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;"
                                    href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu
                                        thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga
                                        Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;"
                                    href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu
                                        thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;"
                                    href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu
                                        thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;"
                                    href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu
                                        thị hc</span></a>
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

        <div class="mt-4">
            <nav aria-label="Page navigation example text-center">
                {{ $news->links() }}
                {{-- <ul class="pagination">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul> --}}
            </nav>
        </div>

    </div>
</section>

@endsection
