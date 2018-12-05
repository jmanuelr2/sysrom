<div class="gallery-photos block3-img dis-block hov-img-zoom"" data-masonry='{ "itemSelector": ".grid-item", "columWidth": 464}'>                    
	@foreach($post->photos->take(1) as $photo)
	    <figure class="grid-item grid-item--height2">
	        @if($loop->iteration === 1)
	            <div class="overlay">{{ $post->photos->count() }} Fotos</div>
	        @endif
	        <img src="/storage/{{ $photo->url }}" class="img-responsive" alt="IMG-BLOG">
	    </figure>
	@endforeach                            
</div>
