@extends('layouts.master')

@section('content')

<section class="large-8 columns family">
	<header class="family_header">
		<h3> {{ strtoupper($family) }} </h3>
	</header>
	<article class="family_content">
		@foreach($product as $item)
		<img src= "/raycocopiers/public/images/products/{{ $item->family }}/{{ $item->color_class }}/{{ $item->name }}.jpg" alt="{{ $item->name }}">
		<h6>{{ $item->name }}</h6>
		@endforeach
	</article>
</section>

@stop
