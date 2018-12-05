@extends('layouts')

@section('meta-title', $post->title)
@section('meta-description', $post->excerpt)

@section('content')
<article class="post image-w-text container">
	<div class="content-post">
		@include($post->viewType());
		<div>
			{!! $post->body !!}
		</div>	

		@include('posts.header')

		<h1>{{ $post->title }}</h1>
		<div class="divider"></div>
		<div class="image-w-text">

		</div>

		<footer class="container-flex space-between">
			@include('partials.social-links', ['description' => $post->title])
			@include('posts.tags')
		</footer>
		<div class="comments">
			<div class="divider"></div>
			<div id="disqus_thread"></div>
			@include('partials.disqus-script')
		</div>
	</div>
</article>
@endsection
@push('styles')
	<link rel="stylesheet" type="text/css" href="/css/twitter-bootstrap.css">
@endpush
@push('scripts')
	<script id="dsq-count-scr" src="//zendero.disqus.com/count.js" async></script>
	<script  src="https://code.jquery.com/jquery-3.3.1.min.js" 
		integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
		crossorigin="anonymous"></script>	
	<script src="/js/twitter-bootstrap.js"></script>
@endpush