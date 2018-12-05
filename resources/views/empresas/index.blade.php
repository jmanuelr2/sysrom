@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                    Empresas
                    @can('empresas.create')
                    <a href="{{ route('empresas.create')}}" class="btn btn-sm btn-primary pull-right">
                        Nueva
                    </a>
                    @endcan
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>R.F.C</th>
                                <th>Nombre</th>
                                <th>C.P.</th>
                                <th>Dirección</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>                            
                        </thead>
                        <tbody>
                            @foreach($empresas as $empresa)
                            <tr>
                                <td>{{ $empresa->id }}</td>
                                <td>{{ $empresa->rfc }}</td>
                                <td>{{ $empresa->nombre }}</td>
                                <td>{{ $empresa->cp }}</td>
                                <td>{{ $empresa->direccion }}</td>
                                <td>
                                    @can('empresas.show')
                                    <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-sm btn-default">    Ver
                                    </a>
                                    @endcan 
                                </td>
                                <td>    
                                    @can('empresas.edit')
                                    <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-sm btn-default">    Editar
                                    </a>
                                    @endcan 
                                </td>
                                <td>    
                                    @can('empresas.destroy')
                                    {!! Form::open(['route' => ['empresas.destroy', $empresa->id],
                                    'method' => 'DELETE']) !!}
                                    <button class="btn btn-sm btn-danger">Borrar</button>
                                    {!! Form::close() !!}
                                    @endcan                       
                                </td>                           
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $empresas->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
