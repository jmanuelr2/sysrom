@extends('admin.layout')

@section('header')
	<h1>
		POST
		<small>Crear publicación</small>
	</h1>
	<ol class="breadcrumb">
		<li><a href="{{ route('admin') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
		<li><a href="{{ route('admin.posts.index') }}"><i class="fa fa-list"></i> Post</a></li>
		<li class="active">Posts</li>
	</ol>			
@endsection

@section('content')
<div class="row">
	@if ($post->photos->count())
		<div class="col-md-12">
			<div class="box box-primary">
				<div class="box-body">
					@foreach ($post->photos as $photo)
						<form method="POST" action="{{ route('admin.photos.destroy', $photo) }}">
							{{ csrf_field() }} {{ method_field('DELETE')}}
							<div class="col-md-2">
								<button class="btn btn-danger btn-xs" 
									style="position: absolute;">
									<i class="fa fa-remove"></i>
								</button>

								<img class="img-responsive" src="/storage/{{ $photo->url }}" alt="">
							</div>
						</form>
					@endforeach				
				</div>
			</div>
		</div>	
	@endif
	
	<form method="POST" action="{{ route('admin.posts.update', $post) }}">
		{{ csrf_field() }} {{  method_field('PUT') }}
		<div class="col-md-8">
			<div class="box box-primary">													
				<div class="box-body">					
					<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
						<label >Título de la publicación:</label>
						<input class="form-control" 
							name="title" 
							value="{{ old('title', $post->title) }}" 
							placeholder="Ingresa aquí el título de la publicación">
						{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group {{ $errors->has('body') ? 'has-error' : '' }}">
						<label>Contenido de la publicación</label>
						<textarea rows="10" 
							name="body" 							
							class="form-control" 
							placeholder="Ingresar contenido completo de la publicación" 
							id="editor1">{{ old('body', $post->body) }}</textarea>
						{!! $errors->first('body', '<span class="help-block">:message</span>') !!}
					</div>		
					<div class="form-group {{ $errors->has('iframe') ? 'has-error' : '' }}">
						<label>Contenido embebido (iframe)</label>
						<textarea rows="2" 
							name="iframe" 							
							class="form-control" 
							placeholder="Ingresar contenido embebido (iframe) de audio o video" 
							id="editor1">{{ old('iframe', $post->iframe) }}</textarea>
						{!! $errors->first('iframe', '<span class="help-block">:message</span>') !!}
					</div>																					
				</div>								
			</div>		
		</div>	
		<div class="col-md-4">
			<div class="box box-primary">													
				<div class="box-body">					
					<div class="form-group">
						<label>Fecha de la publicación</label>
						<div class="input-group date">
							<div class="input-group-addon">
								<i class="fa fa-calendar"></i>
							</div>
							<input type="text" 
								name="published_at" 
								value="{{ old('published_at', $post->published_at ? $post->published_at->format('m/d/Y') : '') }}" 
								class="form-control pull-right" 
								id="datepicker">
						</div>
					</div>
					<div class="form-group {{ $errors->has('category_id') ? 'has-error' : '' }}">
						<label>Categorías</label>
						<select name="category_id" class="form-control select2">
							<option value="">Selecciona una categoría</option>
							@foreach ($categories as $category)
								<option value="{{ $category->id }}" 
									{{ old('category_id', $post->category_id ) == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
							@endforeach
						</select>
						{!! $errors->first('category', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group">
						<label>Etiquetas</label>
						<select name="tags[]" 
							class="form-control select2" 
							multiple="multiple" 
							data-placeholder="Selecciona una o más etiquetas" 
							style="width: 100%;">
							@foreach ($tags as $tag)
								{{-- convierte el arreglo en una colección y pregunta si se encuentra el id de la etiqueta en la colección --}}						
								<option {{ collect(old('tags', $post->tags->pluck('id')))->contains($tag->id) ? 'selected' : '' }} value="{{ $tag->id}}">{{ $tag->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group {{ $errors->has('excerpt') ? 'has-error' : '' }}">
						<label >Extracto publicación:</label>
						<textarea class="form-control" 
							name="excerpt"							
							placeholder="Ingresa un extracto de la publicación">{{ old('excerpt', $post->excerpt ) }}</textarea>
						{!! $errors->first('excerpt', '<span class="help-block">:message</span>') !!}
					</div>
					<div class="form-group">
						<div class="dropzone"></div>
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary btn-block">Guardar publicación</button>
					</div>																							
				</div>								
			</div>				
		</div>
	</form>
</div>
@endsection
@push('styles')
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css">
	<link rel="stylesheet" type="text/css" href="/adminlte/plugins/datepicker/bootstrap-datepicker3.css">
	<link rel="stylesheet" href="/adminlte/plugins/select2/select2.min.css">
@endpush

@push('scripts')
	<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/min/dropzone.min.js"></script>
	<script type="text/javascript" src="/adminlte/plugins/datepicker/bootstrap-datepicker.js"></script>
	<script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
	<script type="text/javascript" src="/adminlte/plugins/select2/select2.full.min.js"></script>
	<script>
		$('#datepicker').datepicker({
			autoclose: true
		});
		$('.select2').select2({
			tags: true
		});
		CKEDITOR.replace( 'editor1' );
		CKEDITOR.config.height = 315;

		var myDropzone = new Dropzone('.dropzone',{
			url: '/admin/posts/{{ $post->url }}/photos',			
			paramName: 'photo',
			acceptedFiles: 'image/*',
			maxFilesize: 2,
			maxFiles: 6,
			headers: {
				'X-CSRF-TOKEN': '{{ csrf_token() }}'
			},
			dictDefaultMessage: 'Arrastra las fotos aquí para subirlas'
		});

		myDropzone.on('error', function(file, res){
			var msg = res.errors.photo[0];
			//console.log(res.errors.photo);
			$('.dz-error-message:last > span').text(msg);
		});


		Dropzone.autoDiscover = false;

	</script>
@endpush