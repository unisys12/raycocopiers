<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->
	<head>
		<meta charset="utf-8" />
		<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<title>Rayco Inc; Gooses Guide</title>
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
		  document.write('<script src= /js/vendor/'
		    + ('__proto__' in {} ? 'zepto' : 'jquery')
		    + '.js><\/script>');
		</script>
	</head>
<body class="body">

	<div class="large-8 centered columns goose">
		<h1>Rayco Inc Gooses Guide</h1>
		@yield('content')
	</div>
<!--
	<script type="text/javascript">
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
	</script>

	 -->
	</body>
</html>
