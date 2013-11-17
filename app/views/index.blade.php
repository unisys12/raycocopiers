@extends('layouts.master')

@section('content')
	<section class="large-8 columns">

		<article class="carousel">
			<figure class="image img-one">
				<img src=" {{ asset('images/banners/Multifunction.jpg') }} " alt="Multifunction Banner">
				<figcaption>Rayco offers a full line of Savin Black&White and Color MPFs. Please, take a look around and let's us know any questions you might have.</figcaption>
			</figure>

			<figure class="image img-two">
				<img src=" {{ asset('images/banners/Prod-Pg-Banner-Sample2.jpg') }} " alt="TimeSaving Banner">
				<figcaption>Looking to save time and money? Who isn't? Well, take a look at our products and see what you can find</figcaption>
			</figure>

			<figure class="image img-three">
				<img src=" {{ asset('images/banners/Solutions-Banner-2.jpg') }} " alt="Solutions Banner">
				<figcaption>What your office to go paperless? Don't know what paperless is or have questions and concerns? Feel free to contact us and we will be happy to help any way we can.</figcaption>
			</figure>
		</article>
	</section>
@stop
