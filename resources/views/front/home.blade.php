@extends('layouts.landing')

@section('title', "Naraku - Neraca Bahan Baku ")

@section('css')
	<style media="screen">
			#green{
				background-color: #27ae60;
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
		<section class="main-slider" data-scroll-index="0">
			<!-- slide of the page -->
			<div class="slide">
				<div id="bgvid" style="background-color: rgba(0, 0, 0, 0.3);"></div>
				<div id="polina">
					<div class="holder">
						<div class="container">
							<div class="row">
								<div class="col-xs-12">
									<h1>Pupuk Organik <br class="hidden-xs">Perkaya Kabon Organik</h1>
									<p>Kesuburan tanah dapat dikembalikan melalui pemberian pupuk organik sesuai kebutuhan. <br class="hidden-xs">Karya Tani 2  Bondowoso dengan tools Naraku akan memberikan rekomendasi kebutuhan pupuk sesuai dengan kondisi lahan anda.</p>
									<div class="btn-holder">
										<a href="/register" id="green" class="btn-primary text-center text-uppercase active md-round">Daftar</a>
										<a href="#" class="btn-primary text-center text-uppercase md-round">Selengkapnya</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- slide of the page end -->
		</section>
		<!-- process holder of the page -->
		<div class="process-holder container" data-scroll-index="1">
			<div class="row">
				<header class="col-xs-12 header text-center">
					<h4>Fasilitas & <span class="clr">Cara Kerja</span></h4>
					<p>Layanan yang tersedia untuk memenuhi kebutuhan lahan anda.</p>
				</header>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<!-- process list of the page -->
					<ul class="list-unstyled process-list">
						<li class="text-center">
							<span class="num md-round">1</span>
							<div class="icon"><img src="{{ asset('assets/images/smart-order.png') }}" alt="Pemesanan" class="img-responsive"></div>
							<h3>Pemesanan</h3>
							<p>Jumlah dan jenis pupuk yang dipesan <br>akan disesuaikan dengan kebutuhan lahan anda.</p>
						</li>
						<li class="text-center">
							<span class="num md-round">2</span>
							<div class="icon"><img src="{{ asset('assets/images/produce.png') }}" alt="Produksi" class="img-responsive"></div>
							<h3>Produksi</h3>
							<p>Pesanan pupuk akan diproduksi/ menggunakan <br>pupuk yang tersedia, anda akan disajikan dengan estimasi produk siap dikirim.</p>
						</li>
						<li class="text-center">
							<span class="num md-round">3</span>
							<div class="icon"><img src="{{ asset('assets/images/deliver.png') }}" alt="Pengiriman" class="img-responsive"></div>
							<h3>Pengiriman Pupuk</h3>
							<p>Pupuk yang sudah diproduksi akan dikirim/ diambil <br>sesuai kehendak pembeli, namun akan dikenakan biaya untuk pengiriman.</p>
						</li>
					</ul>
					<!-- process list of the page end -->
				</div>
			</div>
		</div>
		<!-- process holder of the page end -->
		<!-- testimonail sec of the page -->
		<section class="testimonail-sec" data-scroll-index="2">
			<div class="container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h4>Varian <span class="clr">Produk</span> Pupuk</h4>
						<p>Terdapat beberapa varian pupuk yang diproduksi oleh <b>Karya Tani 2 Bondowoso</b><br>setiap pupuk memiliki keunggulan satu sama lain, baik dari komposisi unsur, dan pengaplikasian.</p>
					</header>
				</div>
				<div class="row">
					<div class="col-xs-12">
						<!-- testimonail slider of the page -->
						<div class="testimonail-slider">
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img05.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>David Ramon</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img06.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>Jennifer Duren</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img07.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>Martin Jones</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img05.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>David Ramon</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img05.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>David Ramon</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
							<!-- slide of the page -->
							<blockquote class="slide text-center">
								<div class="img-holder round"><img src="{{ asset('assets/images/img06.jpg') }}" alt="image description" class="img-responsive"></div>
								<cite>
									<strong>Jennifer Duren</strong>
									<a href="#">www.sitename.com</a>
								</cite>
								<q>Lorem ipsum dolor sit amet, duis metus amet in purus, vitae donec vestibulum tincidunt massa sit, convallis ipsum pede quisque arcu, nunc distinctio.</q>
							</blockquote>
							<!-- slide of the page end -->
						</div>
						<!-- testimonail slider of the page end -->
					</div>
				</div>
			</div>
		</section>
		<!-- testimonail sec of the page end -->
		<!-- price sec of the page -->
		<section class="price-sec" data-scroll-index="3">
			<div class="container">
				<div class="row">
					<header class="col-xs-12 header text-center">
						<h4>Pembelian Pupuk</h4>
						<p style="margin-bottom: 20px;">Karya Tani 2 hanya menyediakan produk untuk anggota, <br>sehingga untuk dapat melakukan pemesanan diharap untuk melakukan pendaftaran/ login terlebih dahulu.<br></p>
            <a href="/register" class="btn-primary text-center text-uppercase active md-round">Pesan Sekarang</a>
          </header>
				</div>

			</div>
		</section>
		<!-- price sec of the page end -->
	</main>
	<!-- main of the page end -->
	<!-- footer of the page -->
	<footer id="footer">
		<!-- footer area of the page -->
		<div class="footer-area">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="f-logo">
							<a href="home.html"><img src="{{ asset('assets/images/logo-light.png') }}" alt="Naraku" height="35px"></a>
						</div>
						<p>Kelompok Tani Karya Tani 2 bertempat di Karang Melok, Kecamatan Tamanan Kabupaten Bondowoso. Salah satu fokus usaha dari organisasi ini adalah produksi  pupuk kandang. Segmentasi penjualan dari Karya Tani 2 Bondowoso berfokus pada anggota dan mitra.</p>
						<!-- socail network of the page -->
						<ul class="list-unstyled socail-network">
              <li><a href="https://wa.me/6281394626994" class="whatsapp"><i class="fa fa-whatsapp"></i></a></li>
							<li><a href="#" class="instagram"><i class="fa fa-instagram"></i></a></li>
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
            <div style="overflow:hidden;width: 700px;position: relative;"><iframe src="https://maps.google.com/maps?hl=en&amp;q=-8.0457162,113.8261433+(Karya Tani 2 Bondowoso)&amp;ie=UTF8&amp;t=&amp;z=12&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><div style="position: absolute;width: 80%;bottom: 10px;left: 0;right: 0;margin-left: auto;margin-right: auto;color: #000;text-align: center;"><small style="line-height: 1.8;font-size: 0px;background: #fff;"> <a href="https://googlemapsembed.net/">Embed Google Map</a> </small></div><style>.nvs{position:relative;text-align:right;} #gmap_canvas img{max-width:none!important;background:none!important}</style></div>
            <h3 class="heading">Hubungi Kami</h3>
						<ul class="list-unstyled contact-list">
							<li><i class="fa fa-phone"></i> <a href="tell:6281394626994">+62 813-9462-6994</a></li>
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
