@extends('layouts.master')

@section('content')

<section class="large-8 columns">
	<header>
		<h3>Add a New Product</h3>
	</header>

	{{ Form::open(array('route' => 'storeproduct')) }}

	{{ Form::label('name', 'Model Name') }}
	{{ Form::text('name') }}
	{{ $errors->first('name', '<span class="error"> :message </span>') }}

	{{ Form::label('colortype', 'Color / Black & White') }}
	{{ Form::select('colortype', array( ''=>'', 'color' => 'Color', 'bw' => 'Black & White' )) }}
	{{ $errors->first('colortype', '<span class="error"> :message </span>') }}

	{{ Form::label('ppmbw', 'Black & White Pages Per Minute') }}
	{{ Form::text('ppmbw') }}
	{{ $errors->first('ppmbw', '<span class="error"> :message </span>') }}

	{{ Form::label('ppmcolor', 'Color Pages Per Minute') }}
	{{ Form::text('ppmcolor') }}
	{{ $errors->first('ppmcolor', '<span class="error"> :message </span>') }}

	{{ Form::label('comment_one', 'Comment One') }}
	{{ Form::text('comment_one') }}
	{{ $errors->first('comment_one', '<span class="error"> :message </span>') }}

	{{ Form::label('comment_two', 'Comment Two') }}
	{{ Form::text('comment_two') }}
	{{ $errors->first('comment_two', '<span class="error"> :message </span>') }}

	{{ Form::label('comment_three', 'Comment Three') }}
	{{ Form::text('comment_three') }}
	{{ $errors->first('comment_three', '<span class="error"> :message </span>') }}

	{{ Form::label('comment_four', 'Comment Four') }}
	{{ Form::text('comment_four') }}
	{{ $errors->first('comment_four', '<span class="error"> :message </span>') }}

	{{ Form::label('comment_five', 'Comment Five') }}
	{{ Form::text('comment_five') }}
	{{ $errors->first('comment_five', '<span class="error"> :message </span>') }}

	{{ Form::submit() }} {{ Form::reset('Clear Form') }}

</section>

@stop
