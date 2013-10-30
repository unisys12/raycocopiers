@extends('layouts.master')

@section('content')
<section class="large-8 columns">
	<header>
		<h3>Submit Meter Reading</h3>
		<br>
		<br>
	</header>
	<article class="content">
		{{ Form::open(array('route' => 'metersubmit')) }}

		<ul>

			<li>
				{{ Form::label('CNumber', 'C Number') }}
				{{ Form::text('CNumber') }}
			</li>
			<li>
				{{ $errors->first('colorTotal') }}
				{{ Form::label('colorTotal', 'Color Total') }}
				{{ Form::text('colorTotal') }}
			</li>
			<li>
				{{ $errors->first('bwTotal') }}
				{{ Form::label('bwTotal', 'Black&White Total') }}
				{{ Form::text('bwTotal') }}
			</li>
			<li>{{ Form::submit() }}</li>
		</ul>

		{{ Form::close() }}
	</article>
</section>
@stop
