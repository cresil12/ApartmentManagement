<!DOCTYPE html>
<html>
<head>
	<title>@yield('title_layout')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	<script src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
</head>
<body>

	@include('includes.header')
	
	@include('includes.sidebar')

	@yield('content')

	@include('includes.footer')


</body>
</html>