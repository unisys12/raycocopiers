@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>{{ strtoupper($model) }}</h3>
	</header>
	<article class="model">
		@foreach($product as $item)
		<img src= "/raycocopiers/public/images/products/{{ $item->family }}/{{ $item->color_class }}/{{ $item->model }}.jpg" alt="{{ $item->model }}" class="left">
		<div class="large-6 columns description">
			<ul>
				<li>{{ $item->comment_one }}</li>
				<li>{{ $item->comment_two }}</li>
				<li>{{ $item->comment_three }}</li>
				<li>{{ $item->comment_four }}</li>
				<li>{{ $item->comment_five }}</li>
			</ul>
		@endforeach
		</div>
	</article>
</section>

@stop
