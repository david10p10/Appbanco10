@extends('layouts.principal')

@section('hijos')
<h1>crear afiliado</h1>

<div class="container">
<div class="row">
<div class="col"> 
    <form action="/afiliado" method="POST">
@csrf
    <div class="mb-3">
    <label for="">codigo afiliado</label>
    <input type="text" name="codigoafiliado" class="form-control">
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
    <label for="">ciudad</label>
    <input type="text" name="ciudad"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">edad</label>
    <input type="text" name="edad"  class="form-control">
    </div>

<button type="submit">guardar</button>
</form>
</form>
</form>
</div>
</div>
</div>

@endsection
