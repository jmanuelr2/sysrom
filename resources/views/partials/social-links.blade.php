<div class="buttons-social-media-share">
	<ul class="share-buttons">
		<li><a href="https://www.facebook.com/sharer/sharer.php?u={{ request()->fullUrl() }}&title={{ $description }}" 
				title="Comparte en Facebook" 
				target="_blank">
				<img alt="Comparte en Facebook" 
					src="/img/flat_web_icon_set/Facebook.png">
			</a>
		</li>
		<li><a href="https://twitter.com/intent/tweet?url={{ request()->fullUrl() }}&text={{ $description }}&via={{ config('app.name') }}&hashtags=criaderoRodriguez" 
				target="_blank" 
				title="Tweet">
				<img alt="Tweet" 
					src="/img/flat_web_icon_set/Twitter.png">
			</a>
		</li>
		<li><a href="https://plus.google.com/share?url={{ request()->fullUrl() }}" 
				target="_blank" 
				title="Share on Google+">
				<img alt="Share on Google+" 
					src="/img/flat_web_icon_set/Google-plus.png">
			</a>
		</li>
		<li><a href="http://pinterest.com/pin/create/button/?url={{ request()->fullUrl() }}&description={{ $description }}" 
				target="_blank" 
				title="Pin it">
				<img alt="Pin it" 
					src="/img/flat_web_icon_set/Pinterest.png">
			</a>
		</li>
	</ul>
</div>