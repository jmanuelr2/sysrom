@extends('layouts')
@section('content')
    <section class="pages container">
        <div class="page page-about">
            <h1 class="text-capitalize">No estás autorizado para ingresar a esta página</h1>
            <p>Regresar a <a href="{{ route('home') }}">Inicio</a></p>
        </div>        
    </section>
@endsection