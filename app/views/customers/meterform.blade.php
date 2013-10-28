@extends('layouts.master')

@section('content')
<section class="large-8 columns">
	<header>
		<h3>Submit Meter Reading</h3>
		<br>
		<br>
		<article class="content">
			{{ Form::open(array('url' => 'customers/submit')) }}

			<ul>
				<li>
					{{ Form::label('CompanyName', 'Company Name') }}
				</li>
				<li>
					{{ Form::text('CompanyName') }}
				</li>
				<li>
					{{ Form::label('CNumber', 'C Number') }}
				</li>
				<li>
					{{ Form::text('C Number') }}
				</li>
				<li>
					{{ Form::label('colorTotal', 'Company Name') }}
				</li>
				<li>
					{{ Form::text('CompanyName') }}
				</li>
			</ul>

			{{ Form::close() }}
		</article>
	</header>
</section>
@stop
