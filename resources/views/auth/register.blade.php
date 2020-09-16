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

    <title>Naraku - Sign Up</title>

		<!-- vector map CSS -->
		<link href="{{ asset('main/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>



		<!-- Custom CSS -->
		<link href="{{ asset('main/css/style.css') }}" rel="stylesheet" type="text/css">

    <style media="screen">
      #green {
        background-color: #27ae60;
      }
    </style>

	</head>
	<body>
		<!--Preloader-->
		<div class="preloader-it">
			<div class="la-anim-1"></div>
		</div>
		<!--/Preloader-->

		<div class="wrapper pa-0">
			<header class="sp-header">
				<div class="sp-logo-wrap pull-left">
					<a href="/">
						<img class="brand-img mr-10" src="{{ asset('assets/images/emblem-light.png') }}" style="max-width:35px;" alt="brand"/>
						<span class="brand-text">Naraku</span>
					</a>
				</div>
				<div class="form-group mb-0 pull-right">
					<span class="inline-block pr-10">Sudah Punya Akun?</span>
					<a class="inline-block btn btn-primary  btn-rounded" id="green" href="{{ route('login') }}">Masuk</a>
				</div>
				<div class="clearfix"></div>
			</header>

			<!-- Main Content -->
			<div class="page-wrapper pa-0 ma-0 auth-page">
				<div class="container-fluid">
					<!-- Row -->
					<div class="table-struct full-width full-height">
						<div class="table-cell vertical-align-middle auth-form-wrap">
							<div class="auth-form  ml-auto mr-auto no-float card-view pt-30 pb-30">
								<div class="row">
									<div class="col-sm-12 col-xs-12">
										<div class="mb-30">
											<h3 class="text-center txt-dark mb-10">Daftar sebagai Pelanggan</h3>
											<h6 class="text-center nonecase-font txt-grey">Lengkapi data berikut</h6>
										</div>
										<div class="form-wrap">
                      <form method="POST" action="{{ route('register') }}">
                          @csrf

												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Nama</label>
													<input type="text" class="form-control" required="" id="exampleInputEmail_2" name="name" placeholder="Nama Lengkap" required>
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Nomer Telepon</label>
													<input type="number" class="form-control" required="" id="exampleInputEmail_2" name="phone_number" placeholder="Nomor Telepon" required>
												</div>
												<div class="form-group">
													<label class="control-label mb-10" for="exampleInputEmail_2">Alamat Email</label>
													<input type="email" class="form-control" required="" id="exampleInputEmail_2" name="email" placeholder="Masukkan email" required>
												</div>
												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Kata Sandi</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password" placeholder="Masukkan kata sandi" required>
												</div>

												<div class="form-group">
													<label class="pull-left control-label mb-10" for="exampleInputpwd_2">Kata Sandi</label>
													<!-- <a class="capitalize-font txt-primary block mb-10 pull-right font-12" href="forgot-password.html">forgot password ?</a> -->
													<div class="clearfix"></div>
													<input type="password" class="form-control" required="" id="exampleInputpwd_2" name="password_confirmation" placeholder="Masukkan kata sandi" required>
												</div>
												<!-- <div class="form-group">
													<div class="checkbox checkbox-primary pr-10 pull-left">
														<input id="checkbox_2" required="" type="checkbox">
														<label for="checkbox_2"> Keep me logged in</label>
													</div>
													<div class="clearfix"></div>
												</div> -->
												<div class="form-group text-center">
													<button type="submit" id="green" class="btn btn-primary  btn-rounded">Masuk</button>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /Row -->
				</div>

			</div>
			<!-- /Main Content -->

		</div>
		<!-- /#wrapper -->

		<!-- JavaScript -->

		<!-- jQuery -->
		<script src="{{ asset('assets/js/jquery.js') }}"></script>

		<!-- Bootstrap Core JavaScript -->
		<script src="{{ asset('main/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('main/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js') }}"></script>

		<!-- Slimscroll JavaScript -->
			<script src="{{ asset('main/js/jquery.slimscroll.js') }}"></script>

		<!-- Init JavaScript -->
		<script src="{{ asset('main/js/init.js') }}"></script>
	</body>
</html>
