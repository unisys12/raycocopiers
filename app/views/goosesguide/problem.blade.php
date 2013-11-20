@extends('layouts.goose')

@section('content')

<form method="post" action={{ route('res') }}>
	<input type="hidden" name="prodCode" value="{{ $product }}">
	<label for="problem">Select Your Problem:</label>
	<select name="problem"
		<?php foreach ($problem as $prob) {
			echo "<option>" . $prob->probDesc . "</option>";
		} ?> />
	<input type="submit">
</form>

@stop
