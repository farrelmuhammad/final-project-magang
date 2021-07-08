<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Booking Payments | PT. OTAK KANAN</title>

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

						<div class="bs-wizard-step disabled">
							<div class="text-center bs-wizard-stepnum">Selesai!</div>
							<div class="progress">
								<div class="progress-bar"></div>
							</div>
							<a href="#0" class="bs-wizard-dot"></a>
						</div>
					</div>
					<!-- End bs-wizard -->
				</div>
			</div>
		</div>
		<!--/hero_in-->
		
		<div class="bg_color_1">
			<form action="{{url("/cart/3/".Auth::user()->id)}}" method="post">
				@csrf
				@method('patch')
			<div class="container margin_60_35">
				<div class="row">
					<div class="col-lg-8">
						<div class="box_cart">
						<div class="form_title">
							<h3><strong>1</strong>Rincian anda</h3>
							<p>
								Masukkan sesuai dengan yang tertera pada kartu identitas yang akan digunakan untuk memesan ruangan.
							</p>
						</div>
						<div class="step">
							<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Nama</label>
									<input type="text" class="form-control" id="firstname_booking" name="firstname_booking" value="{{Auth::user()->name}}">
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-6">
								<div class="form-group">
									<label>Email</label>
									<input type="email" id="email_booking" name="email_booking" class="form-control" value="{{Auth::user()->email}}">
								</div>
							</div>
							<div class="col-sm-6">
								<div class="form-group">
									<label>Nomer Telepon</label>
									<input type="text" id="phone" name="phone" class="form-control" required>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-sm-12">
								<div class="form-group">
									<label>Alamat</label>
									<textarea type="text" id="telephone_booking" name="address" class="form-control" required></textarea>
								</div>
							</div>
						</div>
						</div>
						<hr>
						<!--End step -->

						<div class="form_title">
							<h3><strong>2</strong>Rincian Pembayaran</h3>
							<p>
								Pemesanan Anda aman dan terlindungi.
							</p>
						</div>
						<div class="step">
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<img src="{{asset('img/bca.png')}}" style="height: 200px" class="cards-payment">
								<label>BCA No. Rek - 01232238 a.n perusahaan</label>
							</div>
							<div class="col-md-6 col-sm-12">
								<img src="{{asset('img/mandiri.png')}}" style="height: 200px" class="cards-payment">
								<label>Bank Mandiri No. Rek - 4569887126 a.n perusahaan</label>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-12">
								<img src="{{asset('img/gopay.png')}}" style="height: 200px" class="cards-payment">
								<label>Gopay No. - 3071 089554752231</label>
							</div>
						</div>
						</div>
						<hr>
						<!--End row -->
						<div class="form_title">
							<h3><strong>3</strong>Upload Bukti Pembayaran</h3>
							<p>
								Pemesanan Anda aman dan terlindungi.
							</p>
						</div>
						<div class="step">
						<div class="col-lg-18">
							<p>Klik link dibawah ini, isi formulir yang sudah disediakan, dan upload bukti pembayaran anda.</p>
						</div>
						<div class="row">
						<div class="col-md-4">	
						</div>
						<div class="col-md-4">
							<a href="https://docs.google.com/forms/d/e/1FAIpQLSdb0Bvjad3ha-HNsFvKcR-w-PCw0X0HZNo8kLZtQvrgTqNHWA/viewform" target="_blank" class="btn_1 full-width purchase">Upload</a>
						</div>
						<div class="col-md-4">
						</div>
						</div>
						</div>
						<!--End step -->

						{{-- <div class="form_title">
							<h3><strong>3</strong>Alamat Pemesan</h3>
							<p>
								Masukkan sesuai dengan yang tertera pada kartu identitas yang akan digunakan untuk memesan ruangan.
							</p>
						</div>
						<div class="step">
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Provinsi</label>
										<div class="custom-select-form">
										<select class="wide add_bottom_15" name="country" id="country">
											<option value="" selected>Pilih Provinsi</option>
											<option value="Europe">Europe</option>
											<option value="United states">United states</option>
											<option value="South America">South America</option>
											<option value="Oceania">Oceania</option>
											<option value="Asia">Asia</option>
										</select>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-6">
									<div class="form-group">
										<label>Alamat</label>
										<input type="text" id="street_1" name="street_1" class="form-control">
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group">
										<label>Kecamatan</label>
										<input type="text" id="street_2" name="street_2" class="form-control">
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6 col-sm-12">
									<div class="form-group">
										<label>Kota</label>
										<input type="text" id="city_booking" name="city_booking" class="form-control">
									</div>
								</div>
								<div class="col-md-3 col-sm-6">
									<div class="form-group">
										<label>Kode Pos</label>
										<input type="text" id="postal_code" name="postal_code" class="form-control">
									</div>
								</div>
							</div>
							<!--End row -->
						</div> --}}
						<hr>
						<!--End step -->
						<div id="policy">
							<h5>Kebijakan Pembatalan</h5>
							<p class="nomargin">Jika Anda mengubah atau membatalkan pemesanan, Anda tidak akan mendapatkan refund atau kredit untuk digunakan pada memesan ruangan mendatang. Kebijakan ini akan berlaku terlepas dari kondisi COVID-19, sesuai undang-undang perlindungan konsumen setempat.</p>
						</div>
						</div>
					</div>
					<!-- /col -->
					@if ($cart->products->product_type == "meeting")
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">Rp {{($cart->end - $cart->start) * $cart->products->price}},-</span>
							</div>
							<ul class="cart_details">
								<li>Date <span>{{$cart->created_at}}</span></li>
								<li>Start <span>{{$cart->start}}</span></li>
								<li>End <span>{{$cart->end}}</span></li>
								<li>Kategori <span>{{$cart->products->product_type}}</span></li>
							</ul>
							
								<input type="text" name="status" value="checking" hidden>
							<button type="submit" class="btn_1 full-width purchase">Checkout</button>
							
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
						</div>
					</aside>
					@elseif ($cart->products->product_type == "workspace")
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">Rp {{$cart->end * $cart->products->price}},-</span>
							</div>
							<ul class="cart_details">
								<li>Start <span>{{$cart->start}}</span></li>
								<li>Durasi <span>{{$cart->end}} Bulan</span></li>
								<li>Kategori <span>{{$cart->products->product_type}}</span></li>
							</ul>

								<input type="text" name="status" value="checking" hidden>
							<button type="submit" class="btn_1 full-width purchase">Checkout</button>
							
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
						</div>
					</aside>
					@else
					<aside class="col-lg-4" id="sidebar">
						<div class="box_detail">
							<div id="total_cart">
								Total <span class="float-right">Rp {{$cart->end * $cart->products->price}},-</span>
							</div>
							<ul class="cart_details">
								<li>Start <span>{{$cart->start}}</span></li>
								<li>Durasi <span>{{$cart->end}} Bulan</span></li>
								<li>Kategori <span>{{$cart->products->product_type}}</span></li>
							</ul>
							
								<input type="text" name="status" value="checking" hidden>
							<button type="submit" class="btn_1 full-width purchase">Checkout</button>
							
							<div class="text-center"><small>Pembayaran ada di langkah selanjutnya</small></div>
						</div>
					</aside>
					@endif
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
			</form>
		</div>
		<!-- /bg_color_1 -->
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