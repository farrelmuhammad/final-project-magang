<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>PT. OTAK KANAN</title>

    <!-- Favicons-->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">
    <link rel="apple-touch-icon" type="image/x-icon" href="{{asset('img/apple-touch-icon-57x57-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="72x72" href="{{asset('img/apple-touch-icon-72x72-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="114x114" href="{{asset('img/apple-touch-icon-114x114-precomposed.png')}}">
    <link rel="apple-touch-icon" type="image/x-icon" sizes="144x144" href="{{asset('img/apple-touch-icon-144x144-precomposed.png')}}">

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
			<a href="{{ url('/') }}">
				<img src="{{asset('img/logo.svg')}}" width="150" height="36" alt="" class="logo_normal">
				<img src="{{asset('img/logo_sticky.svg')}}" width="150" height="36" alt="" class="logo_sticky">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="{{ url('wishlist') }}" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
			<li><a href="{{ url('cart') }}" class="cart-menu-btn" title="Cart"><strong>
				@if (Auth::user())
					{{\App\orders::where('user_id',Auth::user()->id)->where('status','pending')->count()}}
				@else
					0
				@endif
			</strong></a></li>
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
				<li><span><a href="{{ url('promo') }}">Paket Meeting</a></span></li>
				<li><span><a href="{{ url('room-register') }}">Daftarkan Ruangan</a></span></li>
			</ul>
		</nav>
	</header>
	<!-- /header -->
	
	<main>
		<section class="hero_single version_2">
			<div class="wrapper">
				<div class="container">
				<div class="row">
					<div class="col-lg-8 text-left pt-5">
					<h3>PT. OTAK KANAN</h3>
					<p>Tersedia Ruang Meeting, Paket Meeting, Kantor, Coworking Space, Ruang Acara yang dapat anda pilih.</p>
					<form class="py-5" method="get" action="{{url('/search')}}">
						<div class="row custom-search-input-2 p-4">
							<div class="col-8 col-sm-8 border">
								<div class="form-group">
									<i class="icon_pin_alt"></i>
									<input class="form-control" name="lokasi" type="text" placeholder="Lokasi">
								</div>
							</div>
							<div class="col-4 col-sm-4 border">
								<select class="wide" name="type">
									<option>Type</option>	
									<option value="meeting">Meeting</option>
									<option value="workspace">Workspace</option>
									<option value="virtualoffice">Virtual Office</option>
								</select>
							</div>
							<div class="w-100 d-none d-md-block pb-4"></div>
							<div class="col-sm-12">
								<input type="submit" class="btn_search" value="Search">
							</div>
						</div>
					</form>
					
					
					</div>
					<div class="col-lg pt-5">
						<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
							<ol class="carousel-indicators">
							  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
							  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
							  <div class="carousel-item active">
								<img class="d-block w-100" src="img/contoh gambar promo 1.jpeg" alt="First slide">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" src="img/contoh gambar promo 2.jpeg" alt="Second slide">
							  </div>
							  <div class="carousel-item">
								<img class="d-block w-100" src="img/contoh gambar promo 3.jpeg" alt="Third slide">
							  </div>
							</div>
							<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
							  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
							  <span class="sr-only">Previous</span>
							</a>
							<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
							  <span class="carousel-control-next-icon" aria-hidden="true"></span>
							  <span class="sr-only">Next</span>
							</a>
						  </div>
					</div>
				</div>
				</div>
			</div>
		</section>
		<!-- /hero_single -->

		<div class="container container-custom margin_80_0" id="nav-meeting">
			<div class="main_title_2">
				<span><em></em></span>
				<h2>Rekomendasi Ruangan</h2>
				<p>Cari, Booking, dan mulai hari produktif Anda dalam hitungan menit</p>
			</div>
			<div id="reccomended" class="owl-carousel owl-theme">
				@foreach ($product as $prod)
				<div class="item">
					<div class="box_grid">
						<figure>
							<a href="#0" class="wish_bt"></a>
							<a href="{{url($prod->product_type.'/detail/'.$prod->id)}}"><img src="{{$prod->image}}" class="img-fluid" alt="" width="800" height="533"><div class="read_more"><span>Read more</span></div></a>
							<small>{{$prod->categories->name}}</small>
						</figure>
						<div class="wrapper">
							<h3><a href="{{url($prod->product_type.'/detail/'.$prod->id)}}">{{$prod->name}}</a></h3>
							<p>Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu.</p>
							<span class="price">From <strong>Rp {{$prod->price}}</strong> / room</span>
						</div>
						<ul>
							<li><i class="icon_clock_alt"></i> 1h 30min</li>
							<li><div class="score"><span>Superb<em>350 Reviews</em></span><strong>8.9</strong></div></li>
						</ul>
					</div>
				</div>
				<!-- /item -->
				@endforeach
			</div>
			<!-- /carousel -->
			<p class="btn_home_align"><a href="tours-half-screen-map-leaflet.html" class="btn_1 rounded">View all Tours</a></p>
			<hr class="large">
		</div>
		<!-- /container -->
		
		<div class="container container-custom margin_30_95">
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Ruangan Meeting & Event</h2>
					<p>Cari, Booking, dan mulai hari produktif Anda dalam hitungan menit.</p>
				</div>
				
				<div class="row">
					@foreach ($meeting as $meet)
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('meeting/detail/'.$meet->id)}}" class="grid_item">
							<figure>
								<div class="score"><strong>8.9</strong></div>
								<img src="{{ Storage::url('public/images/'.$meet->image) }}" class="img-fluid" alt="">
								<div class="info">
									<h3>{{$meet->name}}</h3>
								</div>
							</figure>
						</a>
					</div>
					@endforeach
					<!-- /grid_item -->
				</div>
				
				<!-- /row -->
				<a href="{{url('/meeting')}}"><strong>View all ({{$meeting->count()}}) <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->
			
			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Ruangan Workspace</h2>
					<p>Cari, Booking, dan mulai hari produktif Anda dalam hitungan menit.</p>
				</div>
				
				<div class="row">
					@foreach ($workspace as $work)
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('workspace/detail/'.$work->id)}}" class="grid_item">
							<figure>
								<div class="score"><strong>8.5</strong></div>
								<img src="{{ Storage::url('public/images/'.$work->image) }}" class="img-fluid" alt="">
								<div class="info">
									<h3>{{$work->name}}</h3>
								</div>
							</figure>
						</a>
					</div>
					@endforeach
					<!-- /grid_item -->
				</div>
				
				<!-- /row -->
				<a href="{{url('/workspace')}}"><strong>View all ({{$workspace->count()}}) <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->

			<section class="add_bottom_45">
				<div class="main_title_3">
					<span><em></em></span>
					<h2>Ruangan Virtual Office</h2>
					<p>Cari, Booking, dan mulai hari produktif Anda dalam hitungan menit.</p>
				</div>
				<div class="row">
					@foreach ($voffice as $vo)
					<div class="col-xl-3 col-lg-6 col-md-6">
						<a href="{{url('virtualoffice/detail/'.$vo->id)}}" class="grid_item">
							<figure>
								<div class="score"><strong>8.5</strong></div>
								<img src="{{ Storage::url('public/images/'.$vo->image) }}" class="img-fluid" alt="">
								<div class="info">
									<h3>{{$vo->name}}</h3>
								</div>
							</figure>
						</a>
					</div>
					@endforeach
					<!-- /grid_item -->
				</div>
				<!-- /row -->
				<a href="{{url('/virtualoffice')}}"><strong>View all ({{$voffice->count()}}) <i class="arrow_carrot-right"></i></strong></a>
			</section>
			<!-- /section -->
			
			<div class="banner mb-0">
				<div class="wrapper d-flex align-items-center opacity-mask" data-opacity-mask="rgba(0, 0, 0, 0.3)">
					<div>
						<small>Adventure</small>
						<h3>Your Perfect<br>Advenure Experience</h3>
						<p>Activities and accommodations</p>
						<a href="adventure.html" class="btn_1">Read more</a>
					</div>
				</div>
				<!-- /wrapper -->
			</div>
			<!-- /banner -->

		</div>
		<!-- /container -->

		<div class="call_section">
			<div class="container clearfix">
				<div class="col-lg-5 col-md-6 float-right wow" data-wow-offset="250">
					<div class="block-reveal">
						<div class="block-vertical"></div>
						<div class="box_1">
							<h3>Enjoy a GREAT travel with us</h3>
							<p>Ius cu tamquam persequeris, eu veniam apeirian platonem qui, id aliquip voluptatibus pri. Ei mea primis ornatus disputationi. Menandri erroribus cu per, duo solet congue ut. </p>
							<a href="#0" class="btn_1 rounded">Read more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--/call_section-->
	</main>
	<!-- /main -->

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
	
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>
		
</body>
</html>