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
		<section class="hero_in contacts">
			<div class="wrapper">
				<div class="container">
					
				</div>
			</div>
		</section>
		<!--/hero_in-->

		
		<!--/contact_info-->

		<div class="bg_color_1">
			<div class="container margin_80_55">
				<div class="row justify-content-between">
					
					<div class="col-lg-6">
						<h4>Daftarkan Ruangan Anda!</h4>
						<p>Kami bisa membantu anda menyewakan ruangan kosong yang Anda miliki.</p>
						<p>Silahkan mengisi form di bawah ini dan kami akan menghubungi Anda.</p>
						<div id="message-contact"></div>
						<form method="post" action="assets/contact.php" id="contactform" autocomplete="off">
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Lengkap</label>
										<input class="form-control" type="text" id="name_contact" name="name_contact">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Alamat Email</label>
										<input class="form-control" type="email" id="lastname_contact" name="lastname_contact">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="row">
								<div class="col-md-6">
									<div class="form-group">
										<label>Nomor Telepon</label>
										<input class="form-control" type="text" id="email_contact" name="email_contact">
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<label>Nama Perusahaan (Optional) </label>
										<input class="form-control" type="text" id="phone_contact" name="phone_contact">
									</div>
								</div>
							</div>
							<!-- /row -->
							<div class="form-group">
								<label>Alamat dan Detail Ruangan</label>
								<textarea class="form-control" id="message_contact" name="message_contact" style="height:150px;"></textarea>
							</div>
							
							<a href="#0" class="btn_1 rounded full-width add_top_30">Daftarkan Ruangan</a>
						</form>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /bg_color_1 -->
	</main>
	<!--/main-->
	
	<footer>
		<div class="container margin_60_35">
			<div class="row">
				<div class="col-lg-5 col-md-12 p-r-5">
					<p><img src="img/logo.svg" width="150" height="36" alt=""></p>
					<p>Mea nibh meis philosophia eu. Duis legimus efficiantur ea sea. Id placerat tacimates definitionem sea, prima quidam vim no. Duo nobis persecuti cu. Nihil facilisi indoctum an vix, ut delectus expetendis vis.</p>
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
						<li><a href="about.html">Tentang Kami</a></li>
						<li><a href="login.html">Masuk</a></li>
						<li><a href="daftarkan-ruangan.html">Daftarkan Ruangan</a></li>
						<li><a href="register.html">Daftar</a></li>
						<li><a href="blog.html">News &amp; Events</a></li>
						<li><a href="contacts.html">Hubungi Kami</a></li>
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
						<li><span>© 2019 Panagea</span></li>
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
    <script src="js/common_scripts.js"></script>
    <script src="js/main.js"></script>
	<script src="assets/validate.js"></script>
	
	<!-- SPECIFIC SCRIPTS -->
	<script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/mapmarker.jquery.js"></script>
	<script src="js/mapmarker_func.jquery.js"></script>
	
</body>
</html>