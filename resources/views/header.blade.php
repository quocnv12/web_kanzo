<nav class="container-fluid">
	<div class="select-language">
		<div class="container">
			<a href="#"><img src="images/5-1503128133747.png"></a>
			<a href="#"><img src="images/1200px-Flag_of_Vietnam.svg.png"></a>
		</div>
	</div>
	<div class="container">
		<div class="header-logo ">
			<div class="row" style="margin:0;">
				<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 logo">
					<a href="{{route('home')}}"><img src="images/logo_kazo.png" alt="logo_kanzo"></a>
				</div>
			
				<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 menu_left" style="padding:0;">
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="ic col-md-3 icon_ship">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="title col-md-9">
							<span>0243.233.3311</span>
							<p>Hotline tư vấn miễn phí</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="ic col-md-3 icon_ship">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="title col-md-9">
							<span>0243.233.3311</span>
							<p>Hotline tư vấn miễn phí</p>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
						<div class="ic col-md-3 icon_ship">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="title col-md-9">
							<span>Kanzo.anhtuan@gmail.com</span>
							<p>Liên hệ với chúng tôi</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="menu">
		<div class="tool_bar_menu d-block d-md-none">
			<span class="open-menu"><i class="fa fa-bars"></i></span>
		</div>
		<div class="menu_mobile ">
			<div class="leftmenu d-block d-md-none ">
				<span class="ico d-block d-md-none">
					<a href="{{route('home')}}">
						<h2 style=" padding-top:15%;"></h2>
					</a>
					<span class="close-menu">
						<i class="fa fa-times-circle"></i>
					</span>
				</span>
				<ul>
					<li>
						<a href="#"><span>Trang chủ</span></a>
					</li>
					<li>
						<a href="intro"><span>Giới thiệu</span></a>
					</li>
					<li>
						<a href=""><span> Sản phẩm </span></a> <i class="fa fa-angle-right"></i>
						<ul class="supmenu">
							<li><a href=""><span>Bếp ga âm</span></a></li>
							<li><a href=""><span>Bếp từ </span></a></li>
							<li><a href=""><span>Máy hút mùi</span></a></li>
						</ul>
					</li>
					<li>
						<a href="polycies"><span> Khuyến Mãi </span></a> <i class="fa fa-angle-right"></i>
						<ul class="supmenu">
							<li><a href="polycies"><span>Khuyến mãi </span></a></li>
							<li><a href="polycies"><span> Bảo hành</span></a></li>
						</ul>
					</li>

					<li>
						<a href="{{route('new')}}"><span> Điểm bán </span></a>
					</li>

					<li>
						<a href="{{route('diemban')}}"><span> Tin tức </span></a>
					</li>

					<li>
						<a href="{{route('contact')}}"><span> Liên hệ</span></a>
					</li>
					<li>
						<div>
							<input type="text" placeholder="Nội dung tìm kiếm ...">
							<a href=""><i class="fa fa-search"></i></a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="menu_desktop d-none d-md-block ">
			<nav>
				<div class="menu-wrap">
					<div class="container">
						<div class="menu">
							<div class="menu-right">
								<ul>
									<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
									<li><a href="gioi-thieu/gioi-thieu-chung">Giới thiệu</a></li>
									<li class="menu-tier-2"><a href="">Danh mục </a>
										<ul class="submenu">
											@foreach($categorygl as $row)
											<li><a href="{{route('product',['slug'=>$row->slug])}}">{{$row->name}}</a></li>
											@endforeach
											
										</ul>
									</li>
									<li class="menu-tier-2 menu-tier-3"><a href="">Chính sách</a>
										<ul class="submenu">
											@foreach($polyciesgl as $row)
											<li><a href="{{route('polycies',['slug'=>$row->slug])}}">{{$row->title}}</a></li>
											@endforeach
											<li><a href="">Câu hỏi thường gặp</a></li>
										</ul>
									</li>
									<li><a href="{{route('new')}}">Tin tức</a></li>
									<li><a href="{{route('diemban')}}">Điểm bán</a></li>
									<li><a href="{{route('contact')}}">Liên hệ</a></li>
									<li>
										<form action="" method="get" name="form_tim_kiem">
											<input type="text" placeholder="Nội dung tìm kiếm ...">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</nav>
		</div>
		<div class="menu_desktop menu-fixed d-none d-md-block " id="menu_fixed">
				<nav>
					<div class="menu-wrap">
						<div class="container">
							<div class="menu">
								<div class="menu-right">
									<ul>
									<li><a href="{{route('home')}}"><i class="fa fa-home"></i></a></li>
									<li><a href="gioi-thieu/gioi-thieu-chung">Giới thiệu</a></li>
									<li class="menu-tier-2"><a href="">Danh mục </a>
										<ul class="submenu">
											@foreach($categorygl as $row)
											<li><a href="{{route('product',['slug'=>$row->slug])}}">{{$row->name}}</a></li>
											@endforeach
											
										</ul>
									</li>
									<li class="menu-tier-2 menu-tier-3"><a href="">Chính sách</a>
										<ul class="submenu">
											@foreach($polyciesgl as $row)
											<li><a href="{{route('polycies',['slug'=>$row->slug])}}">{{$row->title}}</a></li>
											@endforeach
										</ul>
									</li>
									<li><a href="{{route('new')}}">Tin tức</a></li>
									<li><a href="{{route('diemban')}}">Điểm bán</a></li>
									<li><a href="{{route('contact')}}">Liên hệ</a></li>
									<li>
										<form action="" method="get" name="form_tim_kiem">
											<input type="text" placeholder="Nội dung tìm kiếm ...">
											<button type="submit"><i class="fa fa-search"></i></button>
										</form>
									</li>
								</ul>
								</div>
							</div>
						</div>
					</div>
				</nav>
		</div>
	</div>
</nav>