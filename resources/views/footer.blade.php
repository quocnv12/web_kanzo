<div class="phonering-alo-phone phonering-alo-green phonering-alo-show" id="phonering-alo-phoneIcon" >
	<div class="phonering-alo-ph-circle"></div>
	 <div class="phonering-alo-ph-circle-fill"></div>
	<a href="tel:+84123456789" class="pps-btn-img" title="Liên hệ">
	 <div class="phonering-alo-ph-img-circle"></div>
	 </a>
</div>
<footer>
	<div class="container">
		<div class="row" style="padding-bottom: 50px;">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 bot-1">
				<a href="{{route('home')}}">
					<img src="images/logo_footer.png" alt="">
				</a>
				<h3 class="dk-tt">Đăng Ký Nhận thông Tin</h3>

				<div class="search-bot">
					<input type="text" placeholder="&ensp;Nhập địa chỉ Email" class="ip-tim1">
					<a href="#"><i class="fa fa-paper-plane pl"></i></a>
				</div>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 bot-2 lien_he_footer">
				<h3>Liên Hệ</h3>
				<p><span>Công ty: </span>{{ $contact->name }}</p>
				<p><span>Địa chỉ: </span>{{ $contact->address }}</p>
				<p><span>Fax: </span>{{ $contact->fax }}</p>
				<p><span>Email: </span>{{ $contact->email }}</p>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 bot-2">
				<h3>Chính Sách</h3>
				<ul>
					@foreach($polyciesgl as $row)
					<li><a href="{{route('polycies',['slug'=>$row->slug])}}">{{$row->title}}</a></li>
					@endforeach
				</ul>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-3 bot-2">
				<h3>Liên Kết Fanpage</h3>

				<iframe src="https://www.facebook.com/plugins/page.php?href=https://www.facebook.com/Kanzovietnam&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=326766014703690" style="width:100%; height:160px;border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
		</div>
	</div>
</footer>
<div class="copyright">
	<p>Copyright © 2019 All rights reserved. Công ty cổ phần Điện tử Kanzo Việt Nam | Thiết kế bởi web88.vn</p>
</div>

