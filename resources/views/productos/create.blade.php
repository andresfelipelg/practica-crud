@extends('plantilla.plantilla')

@section('contenido')
   <h3>Guardar productos</h3>
    <form class="formulario" action="{{('/productos')}}" method="post">
        <a class="btn" href="{{route('productos.index')}}">Ver<br><i class="far fa-eye"></i></a>
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Cantidad</label>
            <input class="form-control" type="number" name="cantidad">
        </div>
        <input class="btn btn-success" type="submit" value="guardar">
    </form>
@endsection