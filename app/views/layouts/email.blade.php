<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Rayco Inc; Authorized Savin Dealer</title>
		<meta name="description" content="Rayco Inc; Independent Savin Dealer; Corinth, MS" />
		<meta name="author" content="Phillip Jackson" />

		<!-- Set view port for responsiveness of the site -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Calls to the single compiled and compressed CSS file -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />
	</head>
<body>
	<header class="row">
		<section class="large-12 columns" >
			<figure>
				<img src="{{ asset('images/logos/Rayco_logo_bw.png') }}" class="rayco" alt="Rayco Logo"/>
			</figure>
		</section>

		<hr />
	</header>
	<main class="row">

		@yield('content')

	</main>
	<footer class="row">
		<section class="large-12 columns">
			<h3>Contact Us</h3>
			<ul>
				<li>Phone: (662)287-8829</li>
				<li>Fax: (662)286-3354</li>
				<li>Email: <a href = "mailto:jcooper@raycocopiers.com">info@raycocopiers.com</a></li>
				<li>2199 Hwy 72 East; Corinth, MS 38834</li>
			</ul>

			<a href="{{ route('home') }}">Home</a> - <a href="{{ route('products') }}">Products</a> - <a href="http://www.raycocopiers.net">Services</a> - <a href="{{ route('customers') }}">Customers</a> - <a href="{{ route('about') }}">About Us</a>
		</section>
		<small>&copy; Copyright  by Phillip Jackson</small>
	</footer>
</body>
</html>
