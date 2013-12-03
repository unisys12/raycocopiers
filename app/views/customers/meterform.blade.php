@extends('layouts.master')

@section('content')
<section class="large-8 columns">
	<header>
		<h3>Submit Meter Reading</h3>
	</header>
	<article class="content">
		{{ Form::open(array('route' => 'metersubmit')) }}

		<ul>
			<li>
				{{ Form::label('name', 'Customer Name')}}
				{{ Form::text('name') }}
			</li>
			<li>
				{{ Form::label('email', 'Customer Email') }}
				{{ Form::email('email') }}
			</li>
			<li>
				{{ Form::label('CNumber', 'C Number') }}
				{{ Form::text('CNumber') }}
			</li>
			{{ $errors->first('CNumber', '<span class="error"> :message </span>') }}

			<li>

				{{ Form::label('colorTotal', 'Color Total') }}
				{{ Form::text('colorTotal') }}
			</li>
			{{ $errors->first('colorTotal', '<span class="error"> :message </span>') }}

			<li>
				{{ Form::label('bwTotal', 'Black&White Total') }}
				{{ Form::text('bwTotal') }}
			</li>
			{{ $errors->first('bwTotal', '<span class="error"> :message </span>') }}

			<li>{{ Form::submit() }}</li>
		</ul>

		{{ Form::close() }}
	</article>
</section>
@stop
