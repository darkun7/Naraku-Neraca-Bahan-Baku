@extends('layouts.landing')

@section('title', "Tentang Naraku ")

@section('css')
	<style media="screen">
			#green{
				background-color: #27ae60;
			}
			.top-page{
				padding-top: 50px !important;
			}
			.top-page img{
				border-radius: 5px;
			}
	</style>
@endsection

@section('content')
<div id="wrapper">
	<!-- header of the page -->
	@include('includes.landing')
	<!-- header of the page end -->
	<!-- main of the page -->
	<main id="main">
		<!-- main slider of the page -->
		<section class="feature-sec bg-full" style="background-image: url({{ asset('assets/images/img04.jpg') }})">
					<div class="container top-page">
						<div class="row">
							<div class="col-xs-12 col-sm-6">
								<div class="img-holder">
									<img src="{{ asset('assets/images/karyatani2.jpeg') }}" alt="image description" class="img-responsive">
								</div>
							</div>
							<div class="col-xs-12 col-sm-6">
								<div class="txt-holder">
									<h4 class="heading2">Karya Tani 2 Bondowoso<br>dengan Tools Naraku</h4>
									{!! $web['deskripsi_naraku'] !!}
									<a href="{{route('pesanan.create')}}" class="btn-primary md-round">Pesan Pupuk <i class="fa fa-angle-right"></i></a>
								</div>
							</div>
						</div>
					</div>
				</section>
		<!-- process holder of the page -->



	<footer id="footer">
		<!-- footer area of the page -->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="f-logo">
							<a href="home.html"><img src="{{ asset('assets/images/logo-light.png') }}" alt="Naraku" height="35px"></a>
						</div>
						<p>{{$web['deskripsi']}}</p>
						<!-- socail network of the page -->
						<ul class="list-unstyled socail-network">
              <li><a href="https://wa.me/{{$web['nomor_wa']}}" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="https://instagram.com/{{$web['instagram']}}" class="instagram"><i class="fa fa-instagram"></i></a></li>
							<!-- <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#" class="google"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#" class="tumblr"><i class="fa fa-tumblr"></i></a></li>
							<li><a href="#" class="yelp"><i class="fa fa-yelp"></i></a></li> -->
						</ul>
						<!-- socail network of the page end -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<h3 class="heading">Mitra Kami</h3>
						<!-- f nav of the page -->
						<ul class="list-unstyled f-nav">
							<li><a href="https://unej.ac.id">Universitar Jember</a></li>
							<!-- <li><a href="#">GraphicRiver</a></li>
							<li><a href="#">AudioJungle</a></li>
							<li><a href="#">3DOcean</a></li>
							<li><a href="#">CodeCanayon</a></li> -->
						</ul>
						<!-- f nav of the page end -->
					</div>
					<div class="col-xs-12 col-sm-6 col-md-2">

					</div>
          <div class="col-xs-12 col-sm-6 col-md-3">
						<h3 class="heading">Lokasi Produksi</h3>
            <div style="overflow:hidden;width: 700px;position: relative;"><iframe src="{{$web['maps']}}+(Karya Tani 2 Bondowoso)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://googlemapsembed.net/">Embed Google Map</a> </small></div><style>.nvs{position:relative;text-align:right;} #gmap_canvas img{max-width:none!important;background:none!important}</style></div>
            <h3 class="heading">Hubungi Kami</h3>
						<ul class="list-unstyled contact-list">
							<li><i class="fa fa-phone"></i> <a href="tell:{{$web['nomor_wa']}}">+{{$web['nomor_wa']}}</a></li>
							<li><i class="fa fa-envelope"></i> <a href="mailto:karyatani2bws@pupuknaraku.com;">karyatani2bws@pupuknaraku.com</a></li>
						</ul>
          </div>
				</div>
			</div>
		</div>
		<!-- footer area of the page end -->
		<div class="container">
			<div class="row">
				<div class="col-xs-12 copyright">
					<p>© Copyright {{date("Y")}} PKM UNEJ, All Rights Reserved</p>
				</div>
			</div>
		</div>
	</footer>

	<!-- footer of the page end -->
	<span id="back-top" class="text-center md-round fa fa-angle-up"></span>
	<!-- loader of the page -->
	<div id="loader" class="loader-holder">
		<div class="block"><img src="{{ asset('assets/images/svg/bars.svg') }}" width="60" alt="loader"></div>
	</div>
</div>
<!-- main container of all the page elements end -->
@endsection
