<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
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
<body>
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
