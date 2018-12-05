<div class="form-group">
	{{ Form::label('rfc', 'Registro federal') }}
	{{ Form::text('rfc', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::label('nombre', 'Nombre') }}
	{{ Form::text('nombre', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::label('cp', 'Codigo postal') }}
	{{ Form::text('cp', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">
	{{ Form::label('direccion', 'Dirección') }}
	{{ Form::text('direccion', null, ['class' => 'form-control']) }}	
</div>

<div class="form-group">	
	{{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}	
</div>
