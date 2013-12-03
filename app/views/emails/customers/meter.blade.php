@extends('layouts.email')

@section('content')

<header>
	<h4>{{ $name }}</h4>
</header>

<section>
	<p>Thank you for submitting your meter through our website. Below, you will see a summary of your submitted meter for you to keep for your records. If you see any errors, please give us a call at our office ASAP let us know what needs to be corrected.</p>
</section>

<article>
	<table>
		<tr>
			<th>{{ $name }} - {{ $CNumber }}</th>
		</tr>
			<tr>
				<td>Contact Email: </td>
				<td>{{ $email }}</td>
			</tr>
			<tr>
				<td>Machine C#:</td>
				<td>{{ $CNumber }}</td>
			</tr>
			<tr>
				<td>Black & White Meter: </td>
				<td>{{ $bwTotal }}</td>
			</tr>
			<tr>
				<td>Color Meter <small>(if applicable)</small></td>
				<td>{{ $colorTotal }}</td>
			</tr>
	</table>
</article>

@stop
