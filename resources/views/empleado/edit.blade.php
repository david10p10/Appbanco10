@extends('layouts.principal')

@section('hijos')
<body>
<h1>editar empleado</h1>
@csrf
<div class="mb-3">
    <label for="">editar empleado</label>
    <input type="text" name="codempleado" class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Nombre</label>
    <input type="text" name="nombre"  class="form-control">
    </div>

    <div class="mb-3">
    <label for="">Apellido</label>
    <input type="text" name="apellido"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Nivel</label>
    <input type="text" name="nivel"  class="form-control">
    </div>
    <div class="mb-3">
    <label for="">Telefono</label>
    <input type="text" name="telefono"  class="form-control">
    </div>

<button type="submit">guardar</button>
</form>
</form>
</form>
</div>
</div>
</div>
    
</body>
@endsection