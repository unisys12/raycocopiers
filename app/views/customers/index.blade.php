@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>Customers and Stuff</h3>
		<br>
		<br>
		<article class="content">
			<ul>
				<li><a href="{{ route('meter') }}">Submit Meter Reading</a></li>
			</ul>
		</article>
	</header>
</section>

@stop
