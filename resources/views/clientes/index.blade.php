@extends('plantilla.plantilla')

@section('contenido')
   <h3>Clientes</h3>
   <form>
        <a class="btn" href="{{route('clientes.create')}}">Nuevo <br> <i class="fas fa-file-alt"></i></a>
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Fecha Nacimiento</th>
                <th scope="col">Celular</th>
                <th scope="col">Correo</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($clientes as $cliente)
             <tr>
                <td>{{$cliente->id}}</td>
                <td>{{$cliente->nombre}}</td>
                <td>{{$cliente->apellido}}</td>
                <td>{{$cliente->fecha_nacimiento}}</td>
                <td>{{$cliente->celular}}</td>
                <td>{{$cliente->correo}}</td>
                <td><a class="btn" href="{{route('productos.edit',$cliente->id)}}"><i class="fas fa-edit"></i></a></td>
                <td><a class="btn" href="{{route('productos.edit',$cliente->id)}}"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
       
    </form>
@endsection