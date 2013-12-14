@extends('layouts.email')

@section('content')

<header>
	<h4>Rayco Sales Team</h4>
</header>

<main>
	<p>
		{{{ $name }}} was looking out the Savin {{{ $product }}} on our website and has requested more info. Please respond to them as soon as possible at {{{ $email }}}. They are looking to support around {{{ $users }}} users with this product.
	</p>

	<p>If the user supplied any commentary, it is as follows - </p>

	<p>{{{ $questions }}}</p>

</main>

@stop
