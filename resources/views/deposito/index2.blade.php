@extends('layouts.principal')

@section('hijos')

<h1>depositos</h1>

<h1>empleado: {{$empleado->nombre}}  {{$empleado->apellido}} </h1>
<h1>modulo de deposito afiliado:{{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}} </h1>

<a href="/deposito/create/{{$empleado->codempleado}} {{$afiliado->codafiliado}} " class="btn btn-primary"></a>realizar

<table class="table">
    <thead>
<tr>
<th>ID</th>
<th>codempleado</th>
<th>codafiliado</th>
<th>fecha</th>
<th>monto</th>



</tr>




    </thead>
    <tbody>
@foreach($depositos as $deposito)
<tr>
<th>{{$deposito->codempleado}}</th>
<th>{{$deposito->id}}</th>
<th>{{$deposito-fecha}}</th>
<th>{{$deposito->monto}}</th>
<th>
<a href="deposito/edit"class="btn btn-info">editar</a>
<a href="afiliado/{{$deposito->id}}"class="btn btn-success">deposito</a>
<button type="button" class="btn btn-warning">Eliminar</button>
</th>
</tr>

@endforeach

    </tbody>

@endsection


