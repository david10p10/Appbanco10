@extends('layouts.principal')

@section('hijos')

<h1>crear empleado</h1>


<div class="container">
<div class="row">
<div class="col"> 
    <form action="/empleado" method="POST">
@csrf
    <div class="mb-3">
    <label for="">Codigo empleado</label>
    <input type="text" name="codempleado" class="form-control" > 
    </div>

    <div class="mb-3">
    <label for="">mombre</label>
    <input type="text" name="mombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">apellido</label>
    <input type="text" name="apellido"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">nivel</label>
    <input type="text" name="nivel"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

<button type="submit">guardar</button>
</form>
</form>
</form>
</div>
</div>
</div>

@endsection
