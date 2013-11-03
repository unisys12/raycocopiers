@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3> {{ strtoupper($family) }} </h3>
	</header>
	<article class="family">
		@foreach($product as $item)
		<img src= "/raycocopiers/public/images/products/{{ $item->family }}/{{ $item->color_class }}/{{ $item->name }}.jpg" alt="{{ $item->name }}">
		<h6>{{ $item->name }}</h6>
		<a href="{{ $item->family }}/{{ $item->color_class }}/{{ $item->name }}">Want more info?</a>
		<hr>
		@endforeach
	</article>
</section>

@stop
