@extends('layouts.principal')

@section('hijos')
<h1>modulo de afiliado</h1>



<a href="afiliado/create"class="btn btn-primary">creaer nuevo afiliado</a>

<table class="table">
    <thead>
<tr>
<th>ID</th>
<th>codafiliado</th>
<th>nombre</th>
<th>apellido</th>
<th>ciudad</th>
<th>telefono</th>
<th>edad</th>
<th>acciones</th>


</tr>


    </thead>
    <tbody>

@foreach($afiliados as $afiliado)
<tr>
<th>{{$afiliado->id}}</th>
<th>{{$afiliado->codafiliado}}</th>
<th>{{$afiliado->nombre}}</th>
<th>{{$afiliado->apellido}}</th>
<th>{{$afiliado->ciudad}}</th>
<th>{{$afiliado->telefono}}</th>
<th>{{$afiliado->edad}}</th>
<th>
<a href="afiliado/edit"class="btn btn-info">editar</a>
<button type="button" class="btn btn-warning">Eliminar</button>
</th>
</tr>
@endforeach


    </tbody>
 