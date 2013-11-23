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
				<figcaption>Want your office to go paperless? Don't know what paperless is or have questions and concerns? Feel free to contact us and we will be happy to help any way we can.</figcaption>
			</figure>
		</article>

		<article class="large-6 columns text-justify">
			<h5>About Us</h5>
			<em>Rayco Inc</em> is a independent Savin dealership. We are located in Corinth, MS and is proud to serve all of Mississippi as well as a large portion of Tennessee and Alabama. We have been in business for well over 15 years and cannot wait to serve you. Please give us a call or come by anytime.
		</article>
		<article class="large-6 columns">
			<h5>Products</h5>
			<nav class="content">
				<li><a href=" {{ url('/products/mfp/bw') }} ">Black and White MPFs</a></li>
				<li><a href=" {{ url('/products/printer/bw') }} ">Black and White Printers</a></li>
				<li><a href=" {{ url('/products/mfp/color') }} ">Color MFPs</a></li>
				<li><a href=" {{ url('/products/printer/color') }} ">Color Printers</a></li>
				<li><a href=" {{ url('/products/wideformat/bw') }} ">Wide Formats</a></li>
				<li><a href=" {{ url('/products/duplicator/bw') }} ">Duplicators</a></li>
			</nav>
		</article>

	</section>



@stop
