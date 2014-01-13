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
		<link rel="shortcut icon" href=" {{ asset('/favicon.ico') }} " />

		<!-- Calls to the single compiled and compressed CSS file -->
		<link rel="stylesheet" href="{{ asset('css/app.css') }}" />

		<!-- Call to load custom modernizer script, which checks for and add HTML5 shims where needed for older browsers -->
		<script src="{{ asset('js/vendor/custom.modernizr.js') }}"></script>

		<!-- Check for Zepto support, load jQuery if necessary
		<script>
		  document.write('<script src= /js/vendor/'
		    + ('__proto__' in {} ? 'zepto' : 'jquery')
		    + '.js><\/script>');
		</script> -->
	</head>
<body class="body">
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
				<li><a href="{{ route('products') }}">Products</a></li>
				<li><a href="http://www.raycocopiers.net">Services</a></li>
				<li><a href="{{ route('customers') }}">Customers</a></li>
				<li><a href="{{ route('about') }}">About Us</a></li>
				<li><a href="{{ url('/blog') }}">Blog</a></li>
			</ul>
		</nav>
		<hr />
	</header>
	<main class="row">

		@yield('content')

		<aside class="large-4 columns posts">

	      @foreach($posts as $post)
	      <article class="post">
		      <h5><a href="{{ url('blog'). '/post/' . $post->slug }}">{{ $post->title }}</a></h5>
		      <hr />
		      <small>{{ $post->publish_date }}</small>
		      <!-- Use substr() to limit post display. O = offset, 300 = num chars to display per return -->
		      <p>{{ substr($post->content, 0, 300) }}</p>
	      </article>
	      @endforeach

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
				<a href="{{ route('home') }}">Home</a> - <a href="{{ route('products') }}">Products</a> - <a href="http://www.raycocopiers.com/comingsoon.html">Services</a> - <a href="{{ route('customers') }}">Customers</a> - <a href="{{ route('about') }}">About Us</a> - <a href="{{ url('/blog') }}">Blog</a>
			</nav>
		</section>
		<small>&copy; Copyright  by Phillip Jackson</small>
	</footer>
<!-- End Main Content/Container -->

	<!-- New Universal Analytics Script
		<script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

         ga('create', 'UA-36848345-1', 'raycocopiers.com');
         ga('send', 'pageview');
        </script> -->

	</body>
</html>
