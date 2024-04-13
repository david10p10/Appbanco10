@extends('layouts.principal')

@section('hijos')
<h1>crear retiro</h1>


<div class="container">
<div class="row">
<div class="col"> 
    <form action="/retiro" method="POST">
@csrf
    <div class="mb-3">
    <label for="">codigo empleado</label>
    <input type="text" name="codempleado" class="form-control"value="{{$id}}">
    </div>

    <div class="mb-3">
    <label for="">codigo afiliado</label>
    <input type="text" name="codafiliado"  class="form-control"value="{{$id2}}">
    </div>

    <div class="mb-3">
    <label for="">fecha</label>
    <input type="text" name="monto"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">monto</label>
    <input type="text" name="ciudad"  class="form-control">
    </div>
   

<button type="submit">guardar</button>
</form>
</form>
</form>
</div>
</div>
</div>



@endsection