<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Office List | PT. OTAK KANAN</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="img/apple-touch-icon-57x57-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="img/apple-touch-icon-72x72-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="img/apple-touch-icon-114x114-precomposed.png">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="img/apple-touch-icon-144x144-precomposed.png">

    <!-- GOOGLE WEB FONT -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <!-- BASE CSS -->
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
	<link href="{{asset('css/vendors.css')}}" rel="stylesheet">

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">

</head>

<body>
		
	<div id="page">
		
	<header class="header menu_fixed">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div>/Page Preload -->
		<div id="logo">
			<a href="{{url('/')}}">
				<img src="{{asset('img/logo.svg')}}" width="150" height="36" alt="" class="logo_normal">
				<img src="{{asset('img/logo_sticky.svg')}}" width="150" height="36" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="wishlist.html" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
			<li><a href="{{url('/cart')}}" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
			@guest
			<li><a href="{{ route('login') }}" class="login" title="Sign In">{{ __('Login') }}</a></li>
			@if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"></a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown-user">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                @if (Auth::user()->role == "admin")
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-secondary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>
									<a class="dropdown-item text-secondary" href="{{ url('/dashboard') }}">
                                        {{ __('Dashboard') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
								@else
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item text-secondary" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
								@endif
                            </li>
			@endguest
		</ul>
		<!-- /top_menu -->
		<a href="#menu" class="btn_mobile">
			<div class="hamburger hamburger--spin" id="hamburger">
				<div class="hamburger-box">
					<div class="hamburger-inner"></div>
				</div>
			</div>
		</a>
		<nav id="menu" class="main-menu">
			<ul>
				<li><span><a href="{{url('/meeting')}}">Meeting & Event</a></span>
					{{-- <ul>
						<li><a href="{{ url('meeting-room') }}">Ruang Meeting</a></li>
						<li><a href="{{ url('meeting-room') }}">Ruang Acara</a></li>
					</ul> --}}
				</li>
				<li><span><a href="{{url('/workspace')}}">Workspace</a></span>
					{{-- <ul>
						<li><a href="{{ url('meeting-room') }}">Ruang Kantor</a></li>
						<li><a href="{{ url('workspace') }}">Coworking Desk</a></li>
						<li><a href="{{ url('workspace') }}">Co-living</a></li>
					</ul> --}}
				</li>
				<li><span><a href="{{url('/virtualoffice')}}">Virtual Office</a></span>
					{{-- <ul>
						<li><a href="{{ url('virtualoffice') }}">Virtual Office</a></li>
						<li><a href="{{ url('virtualoffice') }}">Virtual Office & Pendirian PT</a></li>
						<li><a href="{{ url('virtualoffice') }}">Pendirian PT</a></li>
					</ul> --}}
				</li>
				<li><span><a href="#">Paket Meeting</a></span></li>
				<li><span><a href="#">Daftarkan Ruangan</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->
	@if (Auth::user())
	<main>
		<section class="hero_in hotels_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{$show->name}}</h1>
				</div>
				<span class="magnific-gallery">
					<a href="{{ Storage::url('public/images/'.$show->image) }}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
					<a href="{{ Storage::url('public/images/'.$show->image) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="{{ Storage::url('public/images/'.$show->image) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Deskripsi</a></li>
						<li><a href="#reviews">Review</a></li>
						<li><a href="#sidebar">Booking</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2>Deskripsi</h2>
							<p>{{$show->description}}</p>
							{{-- <div class="row">
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Dolorem mediocritatem</li>
										<li>Mea appareat</li>
										<li>Prima causae</li>
										<li>Singulis indoctum</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Timeam inimicus</li>
										<li>Oportere democritum</li>
										<li>Cetero inermis</li>
										<li>Pertinacia eum</li>
									</ul>
								</div>
							</div> --}}
							<!-- /row -->
							<hr>
							{{-- <h3>Fasilitas</h3>
							<div id="instagram-feed-hotel" class="clearfix"></div>
							<hr>
							<div class="room_type first">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Single Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_2.svg" alt="">Single Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_5.svg" alt="">Shower</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type gray">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_2.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Double Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Double Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type last">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_3.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Suite Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">King size Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_9.svg" alt="">Swimming pool</li>
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<hr>
							<h3>Location</h3>
							<div id="map" class="map map_single add_bottom_30"></div> --}}
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Review</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>8.5</strong>
											<em>Superb</em>
											<small>Based on 4 reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<hr>

							<div class="reviews-container">
								@foreach ($review as $reviews)
									
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											{{$reviews->user->name}} – {{$reviews->created_at}}:
										</div>
										<div class="rev-text">
											<p>
												{{$reviews->description}}
											</p>
										</div>
									</div>
								</div>
								@endforeach
								<!-- /review-box -->
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>
						@if (Auth::user())
						<div class="add-review">
							<h5>Leave a Review</h5>
							<form action="{{url('/review')}}" method="post">
								@csrf
								<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
								<input type="hidden" name="product_id" value="{{ $show->id }}">
								<input type="hidden" name="product_type" value="{{$show->product_type}}">
								<div class="row">
									<div class="form-group col-md-6">
										<label>Name and Lastname *</label>
										<input type="text" name="name_review" id="name_review" value="{{Auth::user()->name}}" class="form-control">
									</div>
									<div class="form-group col-md-6">
										<label>Email *</label>
										<input type="email" name="email_review" id="email_review" class="form-control" value="{{Auth::user()->email}}">
									</div>
									<div class="form-group col-md-6">
										<label>Rating </label>
										<div class="custom-select-form">
										<select name="rating_review" id="rating_review" class="wide">
											<option value="1">1 (lowest)</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5" selected>5 (medium)</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10 (highest)</option>
										</select>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label>Your Review</label>
										<textarea name="review_text" id="review_text" class="form-control" style="height:130px;"></textarea>
									</div>
									<div class="form-group col-md-12 add_top_20">
										<input type="submit" value="Submit" class="btn_1" id="submit-review">
									</div>
								</div>
							</form>
						</div>
						@else
						<div class="add-review">
							<h5>Leave a Review</h5>
							<form action="{{url('/review')}}" method="post">
								@csrf
								<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
								<input type="hidden" name="product_id" value="{{ $show->id }}">
								<input type="hidden" name="product_type" value="{{$show->product_type}}">
								<div class="row">
									<div class="form-group col-md-6">
										<label>Name and Lastname *</label>
										<input type="text" name="name_review" id="name_review" placeholder="" class="form-control" disabled>
									</div>
									<div class="form-group col-md-6">
										<label>Email *</label>
										<input type="email" name="email_review" id="email_review" class="form-control" disabled>
									</div>
									<div class="form-group col-md-6">
										<label>Rating </label>
										<div class="custom-select-form">
										<select name="rating_review" id="rating_review" class="wide">
											<option value="1">1 (lowest)</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5" selected>5 (medium)</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10 (highest)</option>
										</select>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label>Your Review</label>
										<textarea name="review_text" id="review_text" class="form-control" style="height:130px;" disabled></textarea>
									</div>
									<div class="form-group col-md-12 add_top_20">
										<input type="submit" value="Submit" class="btn_1" id="submit-review" disabled>
									</div>
								</div>
							</form>
						</div>
						@endif
							
					</div>
					<!-- /col -->
					@if ($show->product_type == "meeting")
                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail booking">
                                <form action="{{url('/cart/add')}}" method="post">
                                    @csrf
                                <div class="price">
                                    <span>Rp {{$show->price}},- <small>/ Jam</small></span>
                                    
                                </div>
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $show->id }}">
                                <input type="hidden" name="status" value="pending">
								<input type="hidden" name="price" value="{{$show->price}}">
								<input type="hidden" name="product_type" value="{{$show->product_type}}">
                                <div class="form-group input-dates scroll-fix">
                                    <input class="form-control" type="text" name="dates" placeholder="YYYY-MM-DD">
                                    <i class="icon_calendar"></i>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="custom-select-form">
                                        <label>Jam</label>
                                        <select name="start" class="wide">
                                            <option>Mulai..</option>	
                                            <option value="12.00">12.00</option>
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                        </select>
                                        <select name="end" class="wide">
                                            <option>Sampai..</option>	
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                            <option value="15.00">15.00</option>
                                        </select>
                                    </div>
                                </div>
                                <input type="submit" class="add_top_30 btn_1 full-width purchase" value="Pesan Sekarang">
                                <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
                                <div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            </form>
                            </div>
                            <ul class="share-buttons">
                                <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                                <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                                <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                            </ul>
                        </aside>
                    @elseif ($show->product_type == "workspace")
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
                            <form action="{{url('/cart/add')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $show->id }}">
								<input type="hidden" name="status" value="pending">
								<input type="hidden" name="price" value="{{$show->price}}">
								<input type="hidden" name="product_type" value="{{$show->product_type}}">
									<div class="price pt-3">
										<span>Rp {{$show->price}},- <small>/ Bulan</small></span>
										
									</div>
									<div class="form-group input-dates">
										<input class="form-control" type="text" name="start" placeholder="YYYY-MM-DD">
										<i class="icon_calendar"></i>
									</div>
		
									<div class="form-group clearfix">
										<div class="custom-select-form">
											<select name="end" class="wide">
												<option>Durasi</option>	
												<option value="1">1 Bulan</option>
												<option value="2">2 Bulan</option>
												<option value="3">3 Bulan</option>
												<option value="4">4 Bulan</option>
												<option value="5">5 Bulan</option>
												<option value="6">6 Bulan</option>
											</select>
										</div>
									</div>
                              <input type="submit" class="add_top_30 btn_1 full-width purchase" value="Pesan Sekarang">
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            </form>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
                    @else
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
                            <form action="{{url('/cart/add')}}" method="post">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="product_id" value="{{ $show->id }}">
								<input type="hidden" name="end" value="3">
								<input type="hidden" name="status" value="pending">
								<input type="hidden" name="price" value="{{$show->price}}">
								<input type="hidden" name="product_type" value="{{$show->product_type}}">
							<div class="price">
								<span>Rp {{$show->price}},- <small>/ Bulan</small></span>
								
							</div>

							<div class="form-group input-dates">
								<input class="form-control" type="text" name="start" placeholder="YYYY-MM-DD">
								<i class="icon_calendar"></i>
							</div>

							<div class="form-group clearfix">
								<p class="text-danger">* Minimum booking 3 bulan</p>
							</div>
							<input type="submit" class="add_top_30 btn_1 full-width purchase" value="Pesan Sekarang">
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            </form>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
                    @endif
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	@else
	<main>
		<section class="hero_in hotels_detail">
			<div class="wrapper">
				<div class="container">
					<h1 class="fadeInUp"><span></span>{{$show->name}}</h1>
				</div>
				<span class="magnific-gallery">
					<a href="{{ Storage::url('public/images/'.$show->image) }}" class="btn_photos" title="Photo title" data-effect="mfp-zoom-in">View photos</a>
					<a href="{{ Storage::url('public/images/'.$show->image) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
					<a href="{{ Storage::url('public/images/'.$show->image) }}" title="Photo title" data-effect="mfp-zoom-in"></a>
				</span>
			</div>
		</section>
		<!--/hero_in-->

		<div class="bg_color_1">
			<nav class="secondary_nav sticky_horizontal">
				<div class="container">
					<ul class="clearfix">
						<li><a href="#description" class="active">Deskripsi</a></li>
						<li><a href="#reviews">Review</a></li>
						<li><a href="#sidebar">Booking</a></li>
					</ul>
				</div>
			</nav>
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<section id="description">
							<h2>Deskripsi</h2>
							<p>{{$show->description}}</p>
							{{-- <div class="row">
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Dolorem mediocritatem</li>
										<li>Mea appareat</li>
										<li>Prima causae</li>
										<li>Singulis indoctum</li>
									</ul>
								</div>
								<div class="col-lg-6">
									<ul class="bullets">
										<li>Timeam inimicus</li>
										<li>Oportere democritum</li>
										<li>Cetero inermis</li>
										<li>Pertinacia eum</li>
									</ul>
								</div>
							</div> --}}
							<!-- /row -->
							<hr>
							{{-- <h3>Fasilitas</h3>
							<div id="instagram-feed-hotel" class="clearfix"></div>
							<hr>
							<div class="room_type first">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_1.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Single Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_2.svg" alt="">Single Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_5.svg" alt="">Shower</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type gray">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_2.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Double Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Double Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_8.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<div class="room_type last">
								<div class="row">
									<div class="col-md-4">
										<img src="img/gallery/hotel_list_3.jpg" class="img-fluid" alt="">
									</div>
									<div class="col-md-8">
										<h4>Suite Room</h4>
										<p>Sit an meis aliquam, cetero inermis vel ut. An sit illum euismod facilisis, tamquam vulputate pertinacia eum at.</p>
										<ul class="hotel_facilities">
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">King size Bed</li>
											<li><img src="img/hotel_facilites_icon_4.svg" alt="">Free Wifi</li>
											<li><img src="img/hotel_facilites_icon_6.svg" alt="">Bathtub</li>
											<li><img src="img/hotel_facilites_icon_7.svg" alt="">Air Condition</li>
											<li><img src="img/hotel_facilites_icon_9.svg" alt="">Swimming pool</li>
											<li><img src="img/hotel_facilites_icon_3.svg" alt="">Hairdryer</li>
										</ul>
									</div>
								</div>
								<!-- /row -->
							</div>
							<!-- /rom_type -->
							<hr>
							<h3>Location</h3>
							<div id="map" class="map map_single add_bottom_30"></div> --}}
							<!-- End Map -->
						</section>
						<!-- /section -->
					
						<section id="reviews">
							<h2>Review</h2>
							<div class="reviews-container">
								<div class="row">
									<div class="col-lg-3">
										<div id="review_summary">
											<strong>8.5</strong>
											<em>Superb</em>
											<small>Based on 4 reviews</small>
										</div>
									</div>
									<div class="col-lg-9">
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>5 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 95%" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>4 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>3 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>2 stars</strong></small></div>
										</div>
										<!-- /row -->
										<div class="row">
											<div class="col-lg-10 col-9">
												<div class="progress">
													<div class="progress-bar" role="progressbar" style="width: 0" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<div class="col-lg-2 col-3"><small><strong>1 stars</strong></small></div>
										</div>
										<!-- /row -->
									</div>
								</div>
								<!-- /row -->
							</div>

							<hr>

							<div class="reviews-container">
								@foreach ($review as $reviews)
									
								<div class="review-box clearfix">
									<figure class="rev-thumb"><img src="img/avatar3.jpg" alt="">
									</figure>
									<div class="rev-content">
										<div class="rating">
											<i class="icon-star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star voted"></i><i class="icon_star"></i>
										</div>
										<div class="rev-info">
											{{$reviews->user->name}} – {{$reviews->created_at}}:
										</div>
										<div class="rev-text">
											<p>
												{{$reviews->description}}
											</p>
										</div>
									</div>
								</div>
								@endforeach
								<!-- /review-box -->
							</div>
							<!-- /review-container -->
						</section>
						<!-- /section -->
						<hr>
						<div class="add-review">
							<h5>Leave a Review</h5>
							<form action="{{url('/review')}}" method="post">
								@csrf
								<div class="row">
									<div class="form-group col-md-6">
										<label>Name and Lastname *</label>
										<input type="text" name="name_review" id="name_review" placeholder="" class="form-control" disabled>
									</div>
									<div class="form-group col-md-6">
										<label>Email *</label>
										<input type="email" name="email_review" id="email_review" class="form-control" disabled>
									</div>
									<div class="form-group col-md-6">
										<label>Rating </label>
										<div class="custom-select-form">
										<select name="rating_review" id="rating_review" class="wide">
											<option value="1">1 (lowest)</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5" selected>5 (medium)</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10 (highest)</option>
										</select>
										</div>
									</div>
									<div class="form-group col-md-12">
										<label>Your Review</label>
										<textarea name="review_text" id="review_text" class="form-control" style="height:130px;" disabled></textarea>
									</div>
									<div class="form-group col-md-12 add_top_20">
										<input type="submit" value="Submit" class="btn_1" id="submit-review" disabled>
									</div>
								</div>
							</form>
						</div>
							
					</div>
					<!-- /col -->
					@if ($show->product_type == "meeting")
                        <aside class="col-lg-4" id="sidebar">
                            <div class="box_detail booking">
                                <div class="price">
                                    <span>Rp {{$show->price}},- <small>/ Jam</small></span>
                                    
                                </div>
                                <div class="form-group input-dates scroll-fix">
                                    <input class="form-control" type="text" name="dates" placeholder="YY-MM-DD">
                                    <i class="icon_calendar"></i>
                                </div>

                                <div class="form-group clearfix">
                                    <div class="custom-select-form">
                                        <label>Jam</label>
                                        <select name="start" class="wide">
                                            <option>Mulai..</option>	
                                            <option value="12.00">12.00</option>
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                        </select>
                                        <select name="end" class="wide">
                                            <option>Sampai..</option>	
                                            <option value="13.00">13.00</option>
                                            <option value="14.00">14.00</option>
                                            <option value="15.00">15.00</option>
                                        </select>
                                    </div>
                                </div>
                                <a class="add_top_30 btn_1 full-width purchase" href="{{url('/login')}}">Pesan Sekarang</a>
                                <a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
                                <div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            
                            </div>
                            <ul class="share-buttons">
                                <li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
                                <li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
                                <li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
                            </ul>
                        </aside>
                    @elseif ($show->product_type == "workspace")
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
                            <form action="{{url('/cart/add')}}" method="post">
                                @csrf
							<nav>
								<div class="nav nav-tabs" id="nav-tab" role="tablist">
								  <a class="nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Harian</a>
								  <a class="nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Bulanan</a>
								</div>
							</nav>
							  <div class="tab-content" id="nav-tabContent">
								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<div class="price pt-3">
										<span>Rp {{$show->price}},- <small>/ 9 jam</small></span>
										
									</div>
									<div class="form-group input-dates">
										<input class="form-control" type="text" name="dates" placeholder="Tanggal">
										<i class="icon_calendar"></i>
									</div>
		
									<div class="form-group clearfix">
										<div class="custom-select-form">
											<select class="wide">
												<option>Mulai..</option>	
												<option>08.00</option>
												<option>09.00</option>
												<option>10.00</option>
												<option>11.00</option>
												<option>12.00</option>
												<option>13.00</option>
												<option>14.00</option>
												<option>15.00</option>
												<option>16.00</option>
												
											</select>
										</div>
									</div>
								</div>
								<div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
									<div class="price pt-3">
										<span>Rp {{$show->price}},- <small>/ Bulan</small></span>
										
									</div>
									<div class="form-group input-dates">
										<input class="form-control" type="text" name="dates" placeholder="Tanggal">
										<i class="icon_calendar"></i>
									</div>
		
									<div class="form-group clearfix">
										<div class="custom-select-form">
											<select class="wide">
												<option>Durasi</option>	
												<option>1 Bulan</option>
												<option>2 Bulan</option>
												<option>3 Bulan</option>
												<option>4 Bulan</option>
												<option>5 Bulan</option>
												<option>6 Bulan</option>
											</select>
										</div>
									</div>
								</div>
							  </div>
                              <a class="add_top_30 btn_1 full-width purchase" href="{{url('/login')}}">Pesan Sekarang</a>
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            </form>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
                    @else
                    <aside class="col-lg-4" id="sidebar">
						<div class="box_detail booking">
                            <form action="{{url('/cart/add')}}" method="post">
                                @csrf
							<div class="price">
								<span>Rp {{$show->price}},- <small>/ Hari</small></span>
								
							</div>

							<div class="form-group input-dates">
								<input class="form-control" type="text" name="dates" placeholder="Tanggal">
								<i class="icon_calendar"></i>
							</div>

							<div class="form-group clearfix">
								<p class="text-danger">* Minimum booking 3 bulan</p>
							</div>
							<a class="add_top_30 btn_1 full-width purchase" href="{{url('/login')}}">Pesan Sekarang</a>
							<a href="wishlist.html" class="btn_1 full-width outline wishlist"><i class="icon_heart"></i> Tambahkan ke wishlist</a>
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
                            </form>
						</div>
						<ul class="share-buttons">
							<li><a class="fb-share" href="#0"><i class="social_facebook"></i> Share</a></li>
							<li><a class="twitter-share" href="#0"><i class="social_twitter"></i> Tweet</a></li>
							<li><a class="gplus-share" href="#0"><i class="social_googleplus"></i> Share</a></li>
						</ul>
					</aside>
                    @endif
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	@endif
	
<!-- /footer -->
<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.svg" width="150" height="36" alt=""></p>
					<p>Website dan Aplikasi untuk menemukan dan menyewa ruang meeting, kantor, ruang acara mulai dari perjam hingga bulanan. Tersedia ribuan ruang meeting, ruang kantor, coworking space, virtual office, dan ruangan lainnya yang senantiasa bertambah.</p>
					<div class="follow_us">
						<ul>
							<li>Follow us</li>
							<li><a href="#0"><i class="ti-facebook"></i></a></li>
							<li><a href="#0"><i class="ti-twitter-alt"></i></a></li>
							<li><a href="#0"><i class="ti-google"></i></a></li>
							<li><a href="#0"><i class="ti-pinterest"></i></a></li>
							<li><a href="#0"><i class="ti-instagram"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 ml-lg-auto">
					<h5>Useful links</h5>
					<ul class="links">
						<li><a href="{{ url('about') }}">About</a></li>
						<li><a href="{{ route('login') }}">Login</a></li>
						<li><a href="{{ route('register') }}">Register</a></li>
						<!-- <li><a href="blog.html">News &amp; Events</a></li>
						<li><a href="contacts.html">Contacts</a></li> -->
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h5>Contact with Us</h5>
					<ul class="contacts">
						<li><a href="tel://61280932400"><i class="ti-mobile"></i> + 61 23 8093 3400</a></li>
						<li><a href="mailto:info@Panagea.com"><i class="ti-email"></i> info@Panagea.com</a></li>
					</ul>
					<div id="newsletter">
					<h6>Newsletter</h6>
					<div id="message-newsletter"></div>
					<form method="post" action="assets/newsletter.php" name="newsletter_form" id="newsletter_form">
						<div class="form-group">
							<input type="email" name="email_newsletter" id="email_newsletter" class="form-control" placeholder="Your email">
							<input type="submit" value="Submit" id="submit-newsletter">
						</div>
					</form>
					</div>
				</div>
			</div>
			<!--/row-->
			<hr>
			<div class="row">
				<div class="col-lg-6">
					<ul id="footer-selector">
						<li>
							<div class="styled-select" id="lang-selector">
								<select>
									<option value="English" selected>English</option>
									<option value="French">French</option>
									<option value="Spanish">Spanish</option>
									<option value="Russian">Russian</option>
								</select>
							</div>
						</li>
						<li>
							<div class="styled-select" id="currency-selector">
								<select>
									<option value="US Dollars" selected>US Dollars</option>
									<option value="Euro">Euro</option>
								</select>
							</div>
						</li>
						<li><img src="img/cards_all.svg" alt=""></li>
					</ul>
				</div>
				<div class="col-lg-6">
					<ul id="additional_links">
						<li><a href="#0">Terms and conditions</a></li>
						<li><a href="#0">Privacy</a></li>
						<li><span>© 2021 Panagea</span></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!--/footer-->
	</div>
	<!-- page -->
	
	<!-- Sign In Popup -->
	<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
		<div class="small-dialog-header">
			<h3>Sign In</h3>
		</div>
		<form>
			<div class="sign-in-wrapper">
				<a href="#0" class="social_bt facebook">Login with Facebook</a>
				<a href="#0" class="social_bt google">Login with Google</a>
				<div class="divider"><span>Or</span></div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
					<i class="icon_mail_alt"></i>
				</div>
				<div class="form-group">
					<label>Password</label>
					<input type="password" class="form-control" name="password" id="password" value="">
					<i class="icon_lock_alt"></i>
				</div>
				<div class="clearfix add_bottom_15">
					<div class="checkboxes float-left">
						<label class="container_check">Remember me
						  <input type="checkbox">
						  <span class="checkmark"></span>
						</label>
					</div>
					<div class="float-right mt-1"><a id="forgot" href="javascript:void(0);">Forgot Password?</a></div>
				</div>
				<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
				<div class="text-center">
					Don’t have an account? <a href="register.html">Sign up</a>
				</div>
				<div id="forgot_pw">
					<div class="form-group">
						<label>Please confirm login email below</label>
						<input type="email" class="form-control" name="email_forgot" id="email_forgot">
						<i class="icon_mail_alt"></i>
					</div>
					<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
					<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
				</div>
			</div>
		</form>
		<!--form -->
	</div>
	<!-- /Sign In Popup -->
	
	<div id="toTop"></div><!-- Back to top button -->
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>
		
</body>
</html>