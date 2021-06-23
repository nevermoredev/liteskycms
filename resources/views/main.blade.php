<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8>
<meta name=description content="">
<meta name=viewport content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script
src="http://code.jquery.com/jquery-3.3.1.min.js"
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="css/style_main.css">
<link rel="shortcut icon" href="{{ asset('img/'.$maininfo['favicon']) }}" type="image/x-icon">
	<title>{{ $maininfo['title'] }}</title>
</head>
<body>
@include('parts/preloader')
@include('parts/navigation')
@include('parts/header')
@include('parts/products')
@include('parts/services')
@include('parts/contact')
</body>
</html>