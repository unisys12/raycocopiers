@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>Product Information Request</h3>
	</header>
	<article class="form">
		{{ Form::open(array('route' => 'send_form')) }}

		{{ Form::label('name', 'Client Name:') }}
		{{ Form::text('name') }}
		{{ $errors->first('name', '<span class="error"> :message </span>') }}

		{{ Form::label('email', 'Email Address') }}
		{{ Form::email('email') }}
		{{ $errors->first('email', '<span class="error"> :message </span>') }}

		{{ Form::label('product', 'Product Your Interested In?') }}
		{{ Form::text('product', @$model) }}
		{{ $errors->first('product', '<span class="error"> :message </span>') }}

		{{ Form::label('users', 'Number of Users:') }}
		{{ Form::text('users') }}
		{{ $errors->first('users', '<span class="error"> :message </span>') }}

		{{ Form::label('questions', 'Any Specifc Questions or Special Use Cases?') }}
		{{ Form::textarea('questions') }}
		{{ $errors->first('questions', '<span class="error"> :message </span>') }}

		{{ Form::submit() }}

		{{ Form::close() }}
	</article>
</section>

@stop
