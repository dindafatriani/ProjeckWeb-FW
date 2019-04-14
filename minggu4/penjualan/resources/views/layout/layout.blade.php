<!DOCTYPE html>
<html style="background image: url('floating-divs_02.png') no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  overflow: hidden;">
	<head>
		<title>@yield('title')</title>
		<link rel="stylesheet" href="{!! asset('css/a.css') !!}" media="screen">
	</head>
	<body style="background: #D8BFD8;
    color: #222;
    font-family: 'Arial', serif;
    font-size: 16px;">
		<header class="navbar navbar-inverse navbar-fixed-top bs-docs-nav" role="banner" style="background:white;>
			<div class="container" style="background:brown; color:blue; text-align:justify; font-family:Times New Roman";>
			<div class="navbar-header">
			<center><h1><class="navbar-brand">Layout Dengan Blade Template Laravel</class></h1></center>
			</div>
			</div>
		</header>
		<ul>
			@section('sidebar')
				<li>HTML</li>
				<li>CSS</li>
				<li>JS</li>
			@show
		</ul>
		
		<div class="container">
			@yield('content')
		</div>
	</body>
</html>