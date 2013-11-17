@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3> {{ strtoupper($color_class) ." ". strtoupper($family) }} </h3>
	</header>
	<article class="family">
		@foreach($product as $item)
		<img src= "http://raycocopiers.com/images/products/{{ $item->family }}/{{ $item->color_class }}/{{ strtoupper($item->model) }}.jpg" alt="{{ $item->model }}">
		<h6>{{ $item->model }}</h6>
		<a href="{{ $item->color_class }}/{{ $item->model }}">Want more info?</a>
		<hr>
		@endforeach
	</article>
</section>

@stop
