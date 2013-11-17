@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>Thanks for adding a New Product</h3>
		<p><a href="{{ route('createProduct') }}">Add Another Product</a></p>
	</header>
</section>

@stop
