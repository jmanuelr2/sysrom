@extends('layouts.layout')

@section('home')
	<section class="slide1">
		<div class="wrap-slick1">

			<div class="slick1">
				@foreach ($galeries as $galery)
					@if ($galery->id === 1)
						@foreach($galery->photos as $photo)							
							<div class="item-slick1 item{{ $loop->index }}-slick1" style="background-image: url(storage/{{ $photo->url }});">
								<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
									<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15" data-appear="fadeInDown"><span class="fa fa-paw paw-banner" aria-hidden="true"></span>
										Mas que tu mascota
										<span class="fa fa-paw paw-banner" aria-hidden="true"></span>
									</span>

									<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37" data-appear="fadeInUp"><span class="fa fa-paw paw-banner" aria-hidden="true"></span>
										Tu mejor amigo
										<span class="fa fa-paw paw-banner" aria-hidden="true"></span>
									</h2>

									<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
										<!-- Button -->
										<a href="product.html" class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
											Tienda
										</a>
									</div>
								</div>							
							</div>
						@endforeach
					@endif

				@endforeach
			</div>
		</div>
	</section>	
@stop

