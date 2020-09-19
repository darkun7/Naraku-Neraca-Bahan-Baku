<!DOCTYPE html>
<html lang="en">
<head>
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
	<title>@yield('title')</title>
	<!-- include the site stylesheet -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,600,700%7COpen+Sans:300,300i,600" rel="stylesheet">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/plugins.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/colors.css') }}">
	<!-- include the site stylesheet -->
	<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">
	<!-- include the site stylesheet -->
	<style class="color_css"></style>
  @yield('css')
</head>
<body class="boxed-v pattern11">
	@yield('content')
	<!-- popup-holder of the page end here -->
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/plugins.js') }}"></script>
	<!-- include jQuery -->
	<script src="{{ asset('assets/js/jquery.main.js') }}"></script>
  @yield('js')
</body>
</html>
