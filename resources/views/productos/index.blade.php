@extends('plantilla.plantilla')

@section('contenido')
   <h3>productos</h3>
   <form>
        <a class="btn" href="{{route('productos.create')}}">Nuevo <br> <i class="fas fa-file-alt"></i></a>
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Editar</th>
                <th scope="col">Eliminar</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($productos as $producto)
             <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td><a class="btn" href="{{route('productos.edit',$producto->id)}}"><i class="fas fa-edit"></i></a></td>
                <td><a class="btn" href="{{route('productos.edit',$producto->id)}}"><i class="fas fa-trash-alt"></i></a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
       
    </form>
@endsection