@extends('plantilla.plantilla')

@section('contenido')
   <h3>Guardar Clientes</h3>
    <form class="formulario" action="{{('/clientes')}}" method="post">
        <a class="btn" href="{{route('clientes.index')}}">Ver Clientes<br><i class="far fa-eye"></i></a>
        @csrf
        <div class="mb-3">
            <label class="form-label">Nombre</label>
            <input class="form-control" type="text" name="nombre">
        </div>
        <div class="mb-3">
            <label class="form-label">Apellido</label>
            <input class="form-control" type="text" name="apellido">
        </div>
        <div class="mb-3">
            <label class="form-label">Fecha Nacimiento</label>
            <input class="form-control" type="date" name="fecha_nacimiento">
        </div>
        <div class="mb-3">
            <label class="form-label">celular</label>
            <input class="form-control" type="text"name="celular">
        </div>
        <div class="mb-3">
            <label class="form-label">correo</label>
            <input class="form-control" type="email" name="correo">
        </div>
        <input class="btn btn-success" type="submit" value="Guardar">
    </form>
@endsection