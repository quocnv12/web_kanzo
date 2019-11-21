@extends('master-layout')
@section('title')
Giới thiệu
@endsection

@section('css')
<link rel="stylesheet" type="text/css" href="css/stylett.css">
@endsection

@section('js')

@endsection

@section('content')

<div class="container-fruid">
   <div class="h-category-banner">
  <h2 class="text-center" data-aos="fade-up" data-aos-delay="200" style="color: #fff;">GIỚI THIỆU</h2>
  <div class="h-category-banner-black">

  </div>
</div>
  </div>
<div class="container" >
  <div class="row mt-5 gioithieu-content">
      <div class="col-md-3 windows">
      <div class="nav nav-content pr-0 codong-tt codongs-tt mb-4" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        @foreach($introduce as $row)
        <a class="nav-link {{Request::is('gioi-thieu/'.$row->slug) ? 'active' : ''}} " id="v-pills-settings-tab-1"  href="{{route('intro',['slug'=>$row->slug])}}" role="tab"  aria-selected="true" >{{$row->title}}</a>
        @endforeach
        <!-- <a class="nav-link   " id="v-pills-settings-tab-2" data-toggle="pill" href="#v-pills-settings-2" role="tab" aria-controls="v-pills-settings-1" aria-selected="true">Phương Châm</a>
        <a class="nav-link   " id="v-pills-settings-tab-3" data-toggle="pill" href="#v-pills-settings-3" role="tab" aria-controls="v-pills-settings-1" aria-selected="true">Tầm nhìn</a>
        <a class="nav-link   " id="v-pills-settings-tab-4" data-toggle="pill" href="#v-pills-settings-4" role="tab" aria-controls="v-pills-settings-1" aria-selected="true">Sứ mệnh </a>  -->
      </div>
      <div class="img_intro">
        <!-- <img src="images/beptu1.png" class="mb-4 mt-2" style="height: 300px;    width: 100%;"> -->
        @foreach($banner_introduce as $row)
        <img src="images/{{$row->image}}" class="mb-4 mt-2" style="height: 300px;    width: 100%;">
        @endforeach
    </div>
  </div>
    <div class="col-md-9">
      <div class="tab-content " id="v-pills-tabContent"  data-aos="fade-up" data-aos-delay="400">
        
        <div class="tab-pane fade pl-4 show active" id="v-pills-settings-1" role="tabpanel" aria-labelledby="v-pills-home-tab-1">
          <h4 class="mt-3 text-gioithieu"  >{{$detail->title}}</h4>
          <hr>
          <span>{{$detail->content}}</span>
           <img src="images/2.png" style="width: 100%;">
        </div>
    </div>

  </div>
</div>
</div>

@endsection