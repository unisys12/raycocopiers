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

		<!-- Load Rayco Favicon -->
		<link rel="shortcut icon" href="favicon.ico" />

		<!-- Calls to the single compiled and compressed CSS file -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

		<!-- Call to load custom modernizer script, which checks for and add HTML5 shims where needed for older browsers -->
		<script src="{{ asset('js/vendor/custom.modernizr.js') }}"></script>

		<!-- Check for Zepto support, load jQuery if necessary -->
		<script>
		  document.write('<script src= js/vendor/'
		    + ('__proto__' in {} ? 'zepto' : 'jquery')
		    + '.js><\/script>');
		</script>
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
			<ul class="inline-list menu">
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
	<main class="row content">

		@yield('content')

		<aside class="large-4 columns posts">
			<h3>NEWS</h3>
			<h4>7/3/2012</h4>
			<hr>
			<p>Welcome to the new Rayco Inc website. I have put a lot of the things that I have recently learned
			into this site and will be adding more as time goes on. The main section I will be working on is the Customer section. Take a look around and be on the look out for more updates coming soon.</p>
		</aside>
	</main>
	<footer class="row">
		<section class="large-12 columns contact">
			<h3>Contact Us</h3>
			<ul>
				<li>Phone: (662)287-8829</li>
				<li>Fax: (662)286-3354</li>
				<li>Email: <a href = "mailto:jcooper@raycocopiers.com">info@raycocopiers.com</a></li>
				<li>2199 Hwy 72 East; Corinth, MS 38834</li>
			</ul>

			<nav class="footer-menu">
				<a href="{{ route('home') }}">Home</a> - <a href="{{ route('products') }}">Products</a> - <a href="http://www.raycocopiers.com/comingsoon.html">Services</a> - <a href="{{ route('customers') }}">Customers</a> - <a href="{{ route('about') }}">About Us</a>
			</nav>
		</section>
		<small>&copy; Copyright  by Phillip Jackson</small>
	</footer>
<!-- End Main Content/Container -->

	<script type="text/javascript">
/*
	  var _gaq = _gaq || [];
	  var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
	  _gaq.push(['_require', 'inpage_linkid', pluginUrl]);
	  _gaq.push(['_setAccount', 'UA-36848345-1']);
	  _gaq.push(['_setDomainName', 'raycocopiers.com']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
*/
	</script>

	</body>
</html>
