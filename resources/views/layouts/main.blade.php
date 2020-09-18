<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="HandheldFriendly" content="True">

  <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('assets/icon/apple-touch-icon.png') }}">
  <link rel="icon" type="image/png" sizes="192x192" href="{{ asset('assets/icon/android-chrome-192x192.png') }}">
  <link rel="icon" type="image/png" sizes="512x512" href="{{ asset('assets/icon/android-chrome-512x512.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('assets/icon/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/icon/favicon-16x16.png') }}">
  <meta name="msapplication-TileColor" content="#667eea">
  <meta name="theme-color" content="#667eea">
  <link rel="manifest" href="{{ asset('assets/icon/site.webmanifest') }}">

  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="description" content="EXO | SEO Landing page Template">
  <meta name="keywords" content="tanaman, pertanian, perkebunan, pupuk, pupuk organic, kalkukator pintar, neraca bahan baku, sistem pintar">
  <meta name="author" content="PKM 2020 Naraku Unej">

	<title>Naraku - @yield('title')</title>

	<!-- Data table CSS -->
	<link href="{{ asset('main/vendors/bower_components/datatables/media/css/jquery.dataTables.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Toast CSS -->
	<link href="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.css') }}" rel="stylesheet" type="text/css">

	<!-- bootstrap-select CSS -->
	<link href="{{ asset('main/vendors/bower_components/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- switchery CSS -->
	<link href="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.css') }}" rel="stylesheet" type="text/css"/>

	<!-- vector map CSS -->
	<link href="{{ asset('main/vendors/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" type="text/css"/>

	<!-- Custom CSS -->
	<link href="{{ asset('main/css/style.css') }}" rel="stylesheet" type="text/css">
  @yield('css')
</head>

<body>
	<!-- Preloader -->
	<div class="preloader-it">
		<div class="la-anim-1"></div>
	</div>
	<!-- /Preloader -->
    <div class="wrapper theme-2-active pimary-color-pink">
		<!-- Top Menu Items -->
		<nav class="navbar navbar-inverse navbar-fixed-top" style="background: #27ae60; color: white !important;" >
			<div class="mobile-only-brand pull-left" style="background: #27ae60" >
				<div class="nav-header pull-left">
					<div class="logo-wrap">
						<a href="index.html">
							<img class="brand-img" src="{{ asset('assets/images/emblem-light.png') }}" alt="Naraku"/>
							<span class="brand-text">Naraku</span>
						</a>
					</div>
				</div>
				<a id="toggle_nav_btn" class="toggle-left-nav-btn inline-block ml-20 pull-left" href="javascript:void(0);"><i class="zmdi zmdi-menu" style="color: white !important;"></i></a>
				<a id="toggle_mobile_search" data-toggle="collapse" data-target="#search_form" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-search"></i></a>
				<a id="toggle_mobile_nav" class="mobile-only-view" href="javascript:void(0);"><i class="zmdi zmdi-more"></i></a>
			</div>
			<div id="mobile_only_nav" class="mobile-only-nav pull-right" style="color: white !important;">
				<ul class="nav navbar-right top-nav pull-right">
          <li class="dropdown alert-drp">
						<a href="#" class="dropdown-toggle" style="color: white !important;" >{{ Auth::user()->name }}</a>
          </li>
					<li class="dropdown auth-drp">
						<a href="#" class="dropdown-toggle pr-0" data-toggle="dropdown"><img src="{{ asset('assets/images/man-person.png') }}" alt="{{ Auth::user()->name }}" class="user-auth-img img-circle"/><span class="user-online-status"></span></a>
						<ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
							<li>
								<a href="{{route('profil')}}"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
							</li>
							<!-- <li>
								<a href="#"><i class="zmdi zmdi-settings"></i><span>Pengaturan</span></a>
							</li> -->
							<li class="divider"></li>
							<li>
								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form1').submit();"><i class="zmdi zmdi-power"></i><span>Keluar</span></a>
							</li>
              <form id="logout-form1" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
              </form>
						</ul>
					</li>
				</ul>
			</div>
		</nav>
		<!-- /Top Menu Items -->

		<!-- Left Sidebar Menu -->
		<div class="fixed-sidebar-left">
			<ul class="nav navbar-nav side-nav nicescroll-bar">

					<!-- User Profile -->
					<li>
						<div class="user-profile text-center">
							<img src="{{ asset('assets/images/man-person.png') }}" alt="{{ Auth::user()->name }}" class="user-auth-img img-circle"/>
							<div class="dropdown mt-5">
							<a href="#" class="dropdown-toggle pr-0 bg-transparent" data-toggle="dropdown">{{ Auth::user()->name }} <span class="caret"></span></a>
              <ul class="dropdown-menu user-auth-dropdown" data-dropdown-in="flipInX" data-dropdown-out="flipOutX">
                <li>
  								<a href="{{route('profil')}}"><i class="zmdi zmdi-account"></i><span>Profil</span></a>
  							</li>
  							<!-- <li>
  								<a href="#"><i class="zmdi zmdi-settings"></i><span>Pengaturan</span></a>
  							</li> -->
  							<li class="divider"></li>
  							<li>
  								<a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i><span>Keluar</span></a>
  							</li>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
                </form>
  						</ul>
							</div>
						</div>
					</li>

				<li class="navigation-header">
					<span>Main</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a class="active" href="javascript:void(0);" data-toggle="collapse" data-target="#dashboard_dr"><div class="pull-left"><i class="zmdi zmdi-landscape mr-20"></i><span class="right-nav-text">Dasbor</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="dashboard_dr" class="collapse collapse-level-1">

            <li>
							<a href="{{route('home')}}">Beranda</a>
						</li>

            @role('produsen')
						<li>
							<a href="{{route('kalkulator')}}">Kalkulator</a>
						</li>
            @endrole
					</ul>
				</li>
        @role('produsen')
        <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#chart_dr"><div class="pull-left"><i class="zmdi zmdi-chart-donut mr-20"></i><span class="right-nav-text">Penjualan </span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="chart_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="{{route('penjualan.index')}}">Penjualan</a>
						</li>
						<li>
							<a href="{{route('penjualan.create')}}">Tambah transaksi</a>
						</li>
            <li>
							<a href="#">Laporan</a>
						</li>
          </ul>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Produk</span></div><div class="pull-right"><span class="label label-success">7</span></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
            <li>
							<a href="{{route('bahan.index')}}">Bahan Baku</a>
						</li>
						<li>
							<a href="{{route('pupuk.index')}}">Pupuk</a>
						</li>
						<li>
							<a href="{{route('pupuk.create')}}">Tambah Pupuk</a>
						</li>
						<li>
							<a href="{{route('pesanan.index')}}">Pesanan</a>
						</li>
						<li>
							<a href="{{route('pupuk.arsip')}}">Pupuk Diarsipkan</a>
						</li>
					</ul>
				</li>
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Komponen</span>
					<i class="zmdi zmdi-more"></i>
				</li>


				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ui_dr"><div class="pull-left"><i class="zmdi zmdi-smartphone-setup mr-20"></i><span class="right-nav-text">Website</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="ui_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="{{route('pengaturan.jumbotron')}}">Jumbotron</a>
						</li>
						<li>
							<a href="{{route('pengaturan.website')}}">Detail Usaha</a>
						</li>
						<li>
							<a href="{{route('pengaturan.maps')}}">Kontak</a>
						</li>
					</ul>
				</li>

				<!-- <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#table_dr"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Mitra</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="table_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a href="basic-table.html">Detail</a>
						</li>
						<li>
							<a href="bootstrap-table.html">Tambah</a>
						</li>
						<li>
							<a href="data-table.html">Arsip</a>
						</li>
					</ul>
				</li> -->

        <li>
					<a href="{{route('pengaturan.maps')}}" ><div class="pull-left"><i class="zmdi zmdi-map mr-20"></i><span class="right-nav-text">maps</span></div><div class="pull-right"><i class="zmdi"></i></div><div class="clearfix"></div></a>
				</li>
        @endrole
        @role('pelanggan')
        <li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#ecom_dr"><div class="pull-left"><i class="zmdi zmdi-shopping-basket mr-20"></i><span class="right-nav-text">Produk</span></div><div class="pull-right"><span class="label label-success">7</span></div><div class="clearfix"></div></a>
					<ul id="ecom_dr" class="collapse collapse-level-1">
						<li>
							<a href="{{route('pupuk.index')}}">Daftar Pupuk</a>
						</li>
						<li>
							<a href="{{route('pesanan.index')}}">Sedang Dipesan</a>
						</li>
						<li>
							<a href="{{route('pesanan.riwayatpesan')}}">Riwayat Pesanan</a>
						</li>
					</ul>
				</li>
        @endrole
				<li><hr class="light-grey-hr mb-10"/></li>
				<li class="navigation-header">
					<span>Pendukung</span>
					<i class="zmdi zmdi-more"></i>
				</li>
				<li>
					<a href="javascript:void(0);" data-toggle="collapse" data-target="#pages_dr"><div class="pull-left"><i class="zmdi zmdi-google-pages mr-20"></i><span class="right-nav-text">Bantuan</span></div><div class="pull-right"><i class="zmdi zmdi-caret-down"></i></div><div class="clearfix"></div></a>
					<ul id="pages_dr" class="collapse collapse-level-1 two-col-list">
						<li>
							<a class="active" href="#">Petunjuk Penggunaan</a>
						</li>
            <li>
							<a class="active" href="#">Ajukan Pertanyaan</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="documentation.html"><div class="pull-left"><i class="zmdi zmdi-book mr-20"></i><span class="right-nav-text">Dokumentasi</span></div><div class="clearfix"></div></a>
				</li>
			</ul>
		</div>
		<!-- /Left Sidebar Menu -->

        <!-- Main Content -->
		<div class="page-wrapper">
      <div class="container-fluid pt-25">
				@yield('content')
			</div>

			<!-- Footer -->
			<footer class="footer container-fluid pl-30 pr-30">
				<div class="row">
					<div class="col-sm-12">
            <p>&copy; Copyright {{date('Y')}} PKM UNEJ, All Rights Reserved</p>
					</div>
				</div>
			</footer>
			<!-- /Footer -->

		</div>
        <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

	<!-- JavaScript -->

    <!-- jQuery -->
    <!-- <script src="{{ asset('main/vendors/bower_components/jquery/dist/jquery.min.js') }}"></script> -->
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('main/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>

	<!-- Vector Maps JavaScript -->
    <script src="{{ asset('main/vendors/vectormap/jquery-jvectormap-2.0.2.min.js') }}"></script>
    <script src="{{ asset('main/vendors/vectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
	  <script src="{{ asset('main/js/vectormap-data.js') }}"></script>

	<!-- Data table JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/datatables/media/js/jquery.dataTables.min.js') }}"></script>

	<!-- Flot Charts JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/Flot/excanvas.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.pie.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.resize.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.time.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.stack.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/Flot/jquery.flot.crosshair.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/flot.tooltip/js/jquery.flot.tooltip.min.js') }}"></script>
	<script src="{{ asset('main/js/flot-data.js') }}"></script>

	<!-- Slimscroll JavaScript -->
	<script src="{{ asset('main/js/jquery.slimscroll.js') }}"></script>

	<!-- simpleWeather JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/moment/min/moment.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/simpleWeather/jquery.simpleWeather.min.js') }}"></script>
	<script src="{{ asset('main/js/simpleweather-data.js') }}"></script>

	<!-- Progressbar Animation JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/waypoints/lib/jquery.waypoints.min.js') }}"></script>
	<script src="{{ asset('main/vendors/bower_components/jquery.counterup/jquery.counterup.min.js') }}"></script>

	<!-- Fancy Dropdown JS -->
	<script src="{{ asset('main/js/dropdown-bootstrap-extended.js') }}"></script>

	<!-- Sparkline JavaScript -->
	<script src="{{ asset('main/vendors/jquery.sparkline/dist/jquery.sparkline.min.js') }}"></script>

	<!-- Owl JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/owl.carousel/dist/owl.carousel.min.js') }}"></script>

	<!-- EChartJS JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/echarts/dist/echarts-en.min.js') }}"></script>
	<script src="{{ asset('main/vendors/echarts-liquidfill.min.js') }}"></script>

	<!-- Toast JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/jquery-toast-plugin/dist/jquery.toast.min.js') }}"></script>

	<!-- Switchery JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/switchery/dist/switchery.min.js') }}"></script>

	<!-- Bootstrap Select JavaScript -->
	<script src="{{ asset('main/vendors/bower_components/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>

	<!-- Init JavaScript -->
	<script src="{{ asset('main/js/init.js') }}"></script>
	<script src="{{ asset('main/js/dashboard2-data.js') }}"></script>

  <script>
    @if($message = Session::get('error'))
    $(window).on("load",function(){
    	window.setTimeout(function(){
    		$.toast({
    			heading: 'Kesalahan',
    			text: '{{$message}}',
    			position: 'top-left',
    			loaderBg:'#e3c94b',
    			icon: '',
    			hideAfter: 3500,
    			stack: 6
    		});
    	}, 3000);
    });
    @endif
    @if($message = Session::get('success'))
    $(window).on("load",function(){
    	window.setTimeout(function(){
    		$.toast({
    			heading: 'Sukses',
    			text: '{{$message}}',
    			position: 'top-left',
    			loaderBg:'#e3c94b',
    			icon: '',
    			hideAfter: 3500,
    			stack: 6
    		});
    	}, 3000);
    });
    @endif
</script>
@yield('js')
</body>

</html>
