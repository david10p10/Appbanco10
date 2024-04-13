@extends('layouts.principal')

@section('hijos')
<h1>Empleado: {{$empleado->nombre}} {{$empleado->apellido}}
<h1>modulo de retiros Afiliado: {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}} </h1>


<a href="/retiro/create/{{$empleado->codempleado}}/{{$afiliado->codafiliado}}" class="btn btn-primary" >realizar retiro</a>
<table class="table">
    <thead>
<tr>
<th>ID</th>
<th>codempleado</th>
<th>codafiliado</th>
<th>fecha</th>
<th>monto</th>
<th>acciones</th>


</tr>


    </thead>
    <tbody>

@foreach($retiros as $retiro)
<tr>
<th>{{retiro->id}}</th>
<th>{{$retiro->codempleado}}</th>
<th>{{$retiro->codafiliado}}</th>
<th>{{$retiro->fecha}}</th>
<th>{{$retiro->monto}}</th>
<th>

</th>
</tr>
@endforeach

</table>
    </tbody>

@endsection