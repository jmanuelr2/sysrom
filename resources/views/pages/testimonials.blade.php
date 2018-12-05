@extends('layouts.layout')

@section('testimonials')
	<div class="testimonials" id="testimonials">
		<div class="container">

			<h3 class="title">Our Clients</h3>

			<div class="carousel slide" data-ride="carousel" id="quote-carousel">
				<!-- Bottom Carousel Indicators -->
				<ol class="carousel-indicators">
					<li data-target="#quote-carousel" data-slide-to="0" class="active"><img class="img-responsive " src="images/t1.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="1"><img class="img-responsive" src="images/t2.jpg" alt="">
					</li>
					<li data-target="#quote-carousel" data-slide-to="2"><img class="img-responsive" src="images/t3.jpg" alt="">
					</li>
				</ol>

				<!-- Carousel Slides / Quotes -->
				<div class="carousel-inner text-center">

					<!-- Quote 1 -->
					<div class="item active">
						<blockquote>
							<div class="row">
								<div class=" left-matter">
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo!</p>
									<h5>--kelly ove</h5>
								</div>


							</div>
						</blockquote>
					</div>
					<!-- Quote 2 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
									<h5>--Kennedy</h5>
								</div>
							</div>
						</blockquote>
					</div>
					<!-- Quote 3 -->
					<div class="item">
						<blockquote>
							<div class="row">
								<div class=" left-matter">

									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
										aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo </p>
									<h5>--Rosey</h5>
								</div>
							</div>
						</blockquote>
					</div>
				</div>

				<!-- Carousel Buttons Next/Prev 
					<a data-slide="prev" href="#quote-carousel" class="left carousel-control"><span class="fa fa-chevron-left"></span></a>
					<a data-slide="next" href="#quote-carousel" class="right carousel-control"><span class="fa fa-chevron-right"></span></a> -->
			</div>
		</div>
	</div>
@stop	