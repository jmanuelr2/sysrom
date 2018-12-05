<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="crearPublicacion" aria-hidden="true">
	<form method="POST" action="{{ route('admin.posts.store', '#create') }}">
		{{ csrf_field() }}	
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					
					<h5 class="modal-title" id="exampleModalLabel">Agregat el titulo de la nueva publicación</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<div class="form-group {{ $errors->has('title') ? 'has-error' : '' }}">
						{{-- <label >Título de la publicación:</label> --}}
						<input id="post-title" class="form-control" 
							name="title" 
							value="{{ old('title') }}" 
							placeholder="Ingresa aquí el título de la publicación" autofocus required>
						{!! $errors->first('title', '<span class="help-block">:message</span>') !!}
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button class="btn btn-primary">Crear publicación</button>
				</div>
			</div>
		</div>
	</form>
</div>
@push('scripts')
	<script>
		if (window.location.hash === '#create') 
		{
			$('#myModal').modal('show');
		}
		$('#myModal').on('hide.bs.modal', function(){
			window.location.hash = '#';
		});

		$('#myModal').on('shown.bs.modal', function() {
			$('#post-title').focus();
			window.location.hash = '#create'
		});
	</script>
@endpush		 