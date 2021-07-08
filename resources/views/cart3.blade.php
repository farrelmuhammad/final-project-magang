<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Booking Confimation | PT. OTAK KANAN</title>

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
	
	<main>
		<div class="hero_in cart_section">
			<div class="wrapper">
				<div class="container">
					<div class="bs-wizard clearfix">
						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Keranjang</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Pembayaran</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>

						<div class="bs-wizard-step active">
							<div class="text-center bs-wizard-stepnum">Selesai!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
					<div id="confirm">
						<h4>Pesanan Selesai!</h4>
						<p>Anda akan mendapatkan email konfirmasi.</p>
					</div>
				</div>
			</div>
		</div>
		<!--/hero_in-->
	</main>
	<!--/main-->
	
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