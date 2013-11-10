@extends('layouts.master')

@section('content')
	<section class="large-8 columns">

		<article class="carousel">
			<figure class="image-one">
				<img src=" {{ asset('images/banners/multifunction.jpg') }} " alt="Multifunction Banner">
			</figure>

			<figure class="image-two">
				<img src=" {{ asset('images/banners/prod-pg-banner-sample2.jpg') }} " alt="TimeSaving Banner">
			</figure>

			<figure class="image-three">
				<img src=" {{ asset('images/banners/solutions-banner-2.jpg') }} " alt="Solutions Banner">
			</figure>
		</article>
	</section>
@stop
