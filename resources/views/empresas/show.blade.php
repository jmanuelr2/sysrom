@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">
                	Empresa
                </div>

                <div class="panel-body">
                	<p><strong>R.F.C.</strong>{{ $empresa->rfc}}</p>
                	<p><strong>Empresa</strong>{{ $empresa->nombre}}</p>
 
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

