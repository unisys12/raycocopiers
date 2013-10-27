<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Rayco Inc; ADMIN</title>
		<meta name="description" content="Rayco Inc; Independent Savin Dealer; Corinth, MS" />
		<meta name="author" content="Phillip Jackson" />

		<!-- Set view port for responsiveness of the site -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />

		<!-- Load Rayco Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />

		<!-- Calls to the single compiled and compressed CSS file -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

		<!-- Call to load custom modernizer script, which checks for and add HTML5 shims where needed for older browsers -->
		<script src={{ asset('js/vendor/custom.modernizr.js') }}></script>
	</head>
	<body>
		<header class="row">
			<section class="large-6 columns" >
				<figure>
					<img src="{{ asset('images/logos/Rayco_logo_bw.png') }}" class="rayco" alt="Rayco Logo"/>
				</figure>
				<figure>
					<img src="{{ asset('images/logos/savin_logo.png') }}" class="savin" alt="Savin Logo" />
				</figure>
			</section>
			<nav class="large-6 columns">
				<ul class="inline-list">
					<li><a href="{{ route('home') }}">Home</a></li>
					<li><a href="{{ route('products') }}">Products</a>
						<!-- <ul class="subMenu">
							<li><a href="http://www.raycocopiers.com/products/bwmfp.php">B\W MFPs</a></li>
							<li><a href="http://www.raycocopiers.com/products/bwprinters.php">B\W Printers</a></li>
							<li><a href="http://www.raycocopiers.com/products/colormfp.php">Color MFPs</a></li>
							<li><a href="http://www.raycocopiers.com/products/colorprinters.php">Color Printers</a></li>
							<li><a href="http://www.raycocopiers.com/products/wideformat.php">Wide Format</a></li>
							<li><a href="http://www.raycocopiers.com/products/scanner.php">Scanners</a></li>
						</ul> --></li>
					<li><a href="http://www.raycocopiers.net">Services</a></li>
					<li><a href="{{ route('customers') }}">Customers</a></li>
					<li><a href="{{ route('about') }}">About Us</a></li>
				</ul>
			</nav>
			<hr />
		</header>
		<main class="row">

			@yield('content')

		</main>
	<!-- Check for Zepto support, load jQuery if necessary -->
	<script>
	  document.write('<script src=../js/vendor/'
	    + ('__proto__' in {} ? 'zepto' : 'jquery')
	    + '.js><\/script>');
	</script>
	</body>
</html>
