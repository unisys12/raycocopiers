@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3></h3>
	</header>
	<nav class="content">
		<li><a href=" {{ url('/products/mfp/bw') }} ">Black and White MPFs</a></li>
		<li><a href=" {{ url('/products/printer/bw') }} ">Black and White Printers</a></li>
		<li><a href=" {{ url('/products/mfp/color') }} ">Color MFPs</a></li>
		<li><a href=" {{ url('/products/printer/color') }} ">Color Printers</a></li>
		<li><a href=" {{ url('/products/wideformat/bw') }} ">Wide Formats</a></li>
		<li><a href=" {{ url('/products/duplicator/bw') }} ">Duplicators</a></li>
	</nav>
</section>

@stop
