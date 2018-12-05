
<section class="blog bgwhite p-t-94 p-b-65" id="blog">
	<div class="container">
		<div class="sec-title p-b-52">
			<h3 class="m-text5 t-center">
				Nuestro Blog
			</h3>
		</div>
			<div class="row">

				@foreach($posts as $post)
					<div class="col-sm-10 col-md-4 p-b-30 m-l-r-auto">
						<!-- Block3 -->
						<div class="block3">
						    @if($post->photos->count())
                    			@foreach($post->photos->take(1) as $photo)
							    						     
							        <div>{{ $post->photos->count() }} Fotos</div>
							     
							        <a href="#" class="block3-img dis-block hov-img-zoom">
							        	<img src="/storage/{{ $photo->url }}" class="img-responsive" alt="IMG-BLOG">
							    	</a>
							    
								@endforeach  
                			@elseif($post->iframe)
								<div class="video">
								    {!! $post->iframe !!}
								</div>                    			
                			@endif 							                   
							                          									                    
							<div class="block3-txt p-t-14">
								<h4 class="p-b-7 m-text11">
									
										{{ $post->excerpt }}
									
								</h4>
								<span class="s-text6">Por:</span> <span class="s-text7">{{ $post->owner->name }}</span>
								<span class="s-text6">el</span> <span class="s-text7">{{ optional($post->published_at)->format('M d') ? $post->published_at->format('M d') : ''  }}</span>				 		
								<p class="s-text7 p-t-16">
									{!! $post->body !!}
								</p>
							</div>
						</div>
					</div>
				@endforeach		
			</div>
		
	</div>
	
</section>
