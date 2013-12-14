@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>Product Information Request</h3>
	</header>
	<article class="form">

		{{ $data['questions'] }}

	</article>
</section>

@stop
