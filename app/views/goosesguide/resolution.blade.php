@extends('layouts.goose')

@section('content')

<input type="hidden" name="prodCode" value="{{ $product }}">
<input type="hidden" name="probDesc" value="{{ $problem }}">

<ul>
	@foreach($probRes as $res)
	<li class="product">{{ $product }}</li>
	<li class="problem">{{ $problem }}</li>
	<li class="resolution">{{ $res->probRes }}</li>
	<li><br></li>
	@endforeach
</ul>

@stop
