@extends('layouts.principal')

@section('hijos')

nombre de empleado {{$empleado->codempleado}} {{$empleado->nombre}} {{$empleado->apellido}} 


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
<a href="/retiro/{{$afiliado->id}}/{{$empleado->id}}/"class="btn btn-info">retiro</a>
<a href="/deposito/{{$afiliado->id}}/{{$empleado->id}}/"class="btn btn-info">deposito</a>
</th>
</tr>
@endforeach

</table>
    </tbody>
    