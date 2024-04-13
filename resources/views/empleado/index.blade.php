@extends('layouts.principal')

@section('hijos')
<h1>modulo de empleado</h1>


<a href="empleado/create"class="btn btn-primary">creaer nuevo empleado</a>

<table class="table">
    <thead>
<tr>
<th>ID</th>
<th>codempleado</th>
<th>nombre</th>
<th>apellido</th>
<th>nivel</th>
<th>telefono</th>
<th>acciones</th>


</tr>




    </thead>
    <tbody>
@foreach($empleado as $empleado)
<tr>
<th>{{$empleado->codempleado}}</th>
<th>{{$empleado->id}}</th>
<th>{{$empleado->nombre}}</th>
<th>{{$empleado->apellido}}</th>
<th>{{$empleado->nivel}}</th>
<th>{{$empleado->telefono}}</th>
<th>
<a href="empleado/edit"class="btn btn-info">editar</a>
<a href="afiliado/{{$empleado->id}}"class="btn btn-success">afiliados</a>
<button type="button" class="btn btn-warning">Eliminar</button>
</th>
</tr>

@endforeach

    </tbody>

@endsection