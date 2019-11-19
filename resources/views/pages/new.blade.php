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
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/1.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc,bếp ga nổi PALOMA PAJS25B</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
                                
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/2.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Nguy hiểm lớn từ những sai lầm nhỏ</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>GiadinhNet - Rất nhiều vụ tai nạn đáng tiếc xảy ra mà nguyên nhân từ sự thiếu hiểu biết của người tiêu dùng về gas.</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
                                
                                
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/3.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Đun nấu xong nhớ bỏ 3s làm việc này, vừa tiết kiệm 50% ga lại an toàn, chống cháy nổ</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>Đây là những mẹo nhỏ nhưng không phải ai cũng biết giúp tiết kiệm ga cho gia đình.</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/4.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Sau những vụ bếp ga mini phát nổ như bom: Dùng sai cách là tự hại gia đình mình</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>Từng có trường hợp nạn nhân N.K.T, 21 tuổi (Đắk Lắk) phải cắt bỏ bàn tay trái vì bếp ga mini bất ngờ phát nổ như bom.</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/5.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Mẹo vệ sinh bếp ga sạch sẽ, nhanh chóng</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>Mỗi loại bếp ga khác nhau lại có cách làm sạch khác nhau mà bạn nên lưu ý.</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
                                <div class="row new_row">
                                    <div class="col-md-4">
                                  
                                            <div class="thumbnail text-center">
                                                <img src="images/6.jpg"
                                                     alt="" style="width:100%;">
                                            </div>
                                       
                                       
                                    </div>
                                    <!-- Blog Content -->
                                    <div class="col-md-8 blog-content">
                                        <a href="{{route('new_detail')}}" class="blog-headline">
                                            <h5>Đến khổ vì chồng sĩ diện</h5>
                                        </a>
                                        <div class="meta d-flex align-items-center">
                                            07-11-2019
                                        </div>
                                        <a href="{{route('new_detail')}}" class="ccc">
                                        	<p>Có lần mẹ vợ mua cho cái bếp ga, thế là sấm sét nổ ra luôn trong nhà. Hùng thấy vô cùng mất mặt khi cả cái bếp cũng phải nhờ đến mẹ vợ.</p>
                                        </a>
                                        <a href="{{route('new_detail')}}"
                                           class="btn btn-outline-primary btn-sm mt-3">
                                            Đọc tiếp 
                                        </a>
                                    </div>
                                </div>
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
                        <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/1.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                    <li class="list-group-item">
                        <div class="row naa">
                            <div class="col-md-4 " style="padding:0">
                                
                                    <a href="{{route('new_detail')}}">
                                        <img src="images/3.jpg" style="width: 100%">
                                    </a>
                               
                                    
                                
                            </div>
                            <div class="col-md-8" style="padding: 0 10px; font-size: 14px">
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;" href=""><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
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
                                <a style="color: inherit;text-decoration: none;color: #505050;" href="{{route('new_detail')}}"><span>Bếp ga Paloma PA-6MEJ siêu thị điện máy hc siêu thị hc</span></a>
                            </div>
                        </div>

                    </li>
                </ul>
                                <ul class="list-group mt-4 ">
                    <li class="list-group-item text-center font-weight-bold"
                        style="background-color: #c18d28 ; color: white">SẢN Phẩm Nổi bật
                    </li>
                        <li class="list-group-item">
                        <div class="row naa">
                            <div class=" " style="padding:0">
                                
                                    <a href="">
                                        <img src="images/1.jpg" style="width: 100%" class="mb-4">
                                    </a>
                                    <a href="">
                                        <img src="images/2.jpg" style="width: 100%" class="mb-4">
                                    </a>
                                    <a href="">
                                        <img src="images/ok.jpg" style="width: 100%" class="mb-4">
                                    </a>
                               
                               
                                    
                                
                            </div>
                            
                        </div>

                    </li>
                    
                </ul>
            </div>
        </div>

        <div class="mt-4">
           <nav aria-label="Page navigation example text-center" >
                <ul class="pagination">
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
               </ul>
            </nav>
        </div>

    </div>
</section>

@endsection