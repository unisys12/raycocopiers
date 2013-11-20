@extends('layouts.goose')

@section('content')

<form method="post" action={{ route('prob') }}>
	<label for="prodCode">Select Your Model:</label>
	<select name="prodCode"
		<?php foreach ($product as $prod) {
			echo "<option>" . $prod->prodCode . "</option>";
		} ?>>
	<input type="submit">
</form>

@stop
