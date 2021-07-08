<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Panagea - Premium site template for travel agencies, hotels and restaurant listing.">
    <meta name="author" content="Ansonika">
    <title>Room List | PT. OTAK KANAN</title>

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
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin=""/>

    <!-- YOUR CUSTOM CSS -->
    <link href="css/custom.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
        }
    </style>

</head>

<body>
	<div id="page">
		
	<header class="header map_view menu_fixed">
		<!-- <div id="preloader"><div data-loader="circle-side"></div></div>/Page Preload -->
		<div id="logo">
			<a href="{{ url('/') }}">
				<img src="img/logo_sticky.png" width="150" height="36" data-retina="true" alt="">
			</a>
		</div>
		<ul id="top_menu">
			<li><a href="{{ url('wishlist') }}" class="wishlist_bt_top" title="Your wishlist">Your wishlist</a></li>
			<li><a href="{{ url('cart') }}" class="cart-menu-btn" title="Cart"><strong>4</strong></a></li>
			@guest
			<li><a href="{{ route('login') }}" class="login" title="Sign In">{{ __('Login') }}</a></li>
			@if (Route::has('register'))
                                <li>
                                    <a href="{{ route('register') }}"></a>
                                </li>
                            @endif
                        @else
                            <li class="dropdown-user">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-secondary" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
        <div class="container-fluid full-height">
            <div class="row row-height">
                <div class="col-lg-5 content-left order-md-last order-sm-last order-last">
                <div id="results_map_view">
               <div class="container-fluid">
                   <div class="row">
                       <div class="col-10">
                           <h4><strong>145</strong> hasil</h4>
                       </div>
                       <div class="col-2">
                           <a href="#0" class="search_map btn_search_map_view"></a> <!-- /open search panel -->
                       </div>
                   </div>
                   <!-- /row -->
                    <div class="search_map_wp">
                        <div class="custom-search-input-2 map_view">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Apa yang akan kamu cari...">
                                <i class="icon_search"></i>
                            </div>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Dimana">
                                <i class="icon_pin_alt"></i>
                            </div>
                            <div class="form-group input-dates">
                                <input class="form-control" type="text" name="dates" placeholder="When..">
                                <i class="icon_calendar"></i>
                            </div>
                            <select class="wide">
                                <option>Semua Kategori</option>	
                                <option>Ruang Kantor</option>
                                <option>Coworking Desk</option>
                                <option>Co - Living</option>
                            </select>
                            <select class="wide">
                                <option>Rekomendasi</option>
                                <option>Kapasitas +</option>	
                                <option>kapasitas -</option>
                                <option>Harga +</option>
                                <option>Harga -</option>
                                <option>Rating</option>
                            </select>
                            <input type="submit" value="Search">
                        </div>
                    </div>
                    <!-- /search_map_wp -->
               </div>
               <!-- /container -->
           </div>
           <!-- /results -->
            
            <div class="filters_listing version_3">
                <div class="container-fluid">
                    <ul class="clearfix">
                        <li>
                            <div class="switch-field">
                                <input type="radio" id="all" name="listing_filter" value="all" checked>
                                <label for="all">Semua</label>
                                <input type="radio" id="popular" name="listing_filter" value="popular">
                                <label for="popular">Populer</label>
                                <input type="radio" id="latest" name="listing_filter" value="latest">
                                <label for="latest">Terakhir Dilihat</label>
                            </div>
                        </li>
                        <li><a class="btn_filt_map" data-toggle="collapse" href="#filters" aria-expanded="false" aria-controls="filters" data-text-swap="Less filters" data-text-original="More filters">More filters</a></li><br>
                    </ul>
                </div>
                <!-- /container -->
            </div>
            <!-- /filters -->
            <!-- /start -->
            <div class="collapse map_view" id="filters">
                <div class="container-fluid margin_30_5">
                    <h6>Kategori</h6>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="filter_type">
                                <ul>
                                    <li>
                                        <label class="container_check">Semua <small>()</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Kantor<small>()</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="container_check">Harga<small>()</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="filter_type">
                                   <ul>
                                    <li>
                                        <label class="container_check">Rating <small>()</small>
                                            <input type="checkbox">
                                            <span class="checkmark"></span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="add_bottom_30">
                                <h6>Distance</h6>
                                <div class="distance"> Radius di sekitar tujuan terpilih sekitar <span></span> km</div>
                                <input type="range" min="10" max="100" step="10" value="30" data-orientation="horizontal">
                            </div>
                        </div>
                        </div>
                    <!-- /row -->
                </div>
            </div>
            <!-- /Filters -->
		@foreach ($show as $shows)
		<div class="box_list map_view">
		    <div class="row no-gutters">
		        <div class="col-4">
		            <figure>
		                <small>{{$shows->categories->name}}</small>
		                <a href="{{url('workspace/detail/'.$shows->id)}}"><img src="{{ Storage::url('public/images/'.$shows->image) }}" class="img-fluid" alt="" width="800" height="533"></a>
		            </figure>
		        </div>
		        <div class="col-8">
		            <div class="wrapper">
		                <a href="#0" class="wish_bt"></a>
		                <h3><a href="{{url('workspace/detail/'.$shows->id)}}">{{$shows->name}}</a></h3>
		                <span class="price">From <strong>Rp {{$shows->price}}</strong></span><br>
		            </div>
		            <ul>
		                <li>
		                    <a href="#0" onclick="onHtmlClick('Marker',5)" class="address">On Map</a>
		                </li>
		                <li>
		                    <div class="score"><span>Star<em>350 Dilihat</em></span><strong>9.0</strong></div>
		                </li>
		            </ul>
		        </div>
		    </div>
		</div>
		@endforeach
		<!-- /box_list -->		
		<p class="text-center add_top_30"><a href="#0" class="btn_1 rounded"><strong>Lainya</strong></a></p>
		</div>
		<!-- /content-left-->

		<div class="col-lg-7 map-right">
			<div id="map"></div>
			<!-- map-->
		</div>
		<!-- /map-right-->

		</div>
		<!-- /row-->
	</div>
	<!-- /container-fluid -->	
		
	</main>
	<!--/main-->
	
	</div>
    
	<!-- footer-->
	
	<!-- /Sign In Popup -->
		
	<!-- COMMON SCRIPTS -->
    <script src="{{asset('js/common_scripts.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
	<script src="{{asset('assets/validate.js')}}"></script>
	
	<!-- Map -->
	<script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
	<script src="{{asset('leaflet.ajax.min.js')}}"></script>
	<script src="{{asset('js/leaflet_map/leaflet_tours_half_screen_func.js')}}"></script>
	<script src="{{asset('js/leaflet_map/leaflet_tours_markers.js')}}"></script>

	
	<div id="mapid"></div>
	<script>
	var map = L.map('mapid').setView([1.084149, 104.027813], 10);
	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token={accessToken}', {
    	attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://mapbox.com">Mapbox</a>',
    	maxZoom: 18,
    	id: 'mapbox.streets',
    	accessToken: 'your.mapbox.access.token'
	}).addTo(map);
	var geojsonLayer = new L.GeoJSON.AJAX("geojson.json");       
	geojsonLayer.addTo(map);
	</script>
	<!-- <script src="http://maps.googleapis.com/maps/api/js"></script>
	<script src="js/markerclusterer.js"></script>
	<script src="js/map_tours_half_screen.js"></script>
	<script src="js/infobox.js"></script>

	<script>
		$(function() {
		  $('input[name="dates"]').daterangepicker({
			  autoUpdateInput: false,
			  parentEl:'.scroll-fix',
			  minDate:new Date(),
			  opens: 'left',
			  locale: {
				  cancelLabel: 'Clear'
			  }
		  });
		  $('input[name="dates"]').on('apply.daterangepicker', function(ev, picker) {
			  $(this).val(picker.startDate.format('MM-DD-YY') + ' > ' + picker.endDate.format('MM-DD-YY'));
		  });
		  $('input[name="dates"]').on('cancel.daterangepicker', function(ev, picker) {
			  $(this).val('');
		  });
		});
	</script> -->
	
	<script src="{{asset('js/common_scripts.js')}}"></script>
		<script src="{{asset('js/input_qty.js')}}"></script>
		

  
</body>
</html>