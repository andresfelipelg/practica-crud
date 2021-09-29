@extends('plantilla.plantilla')

@section('contenido')
   <h3>productos</h3>
    <form>
        <table class="table table-hover">
            <thead class="table-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Cantidad</th>
                <th scope="col">Editar</th>
              </tr>
            </thead>
            <tbody>
             @foreach ($productos as $producto)
             <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
                <td><a class="btn" href="{{route('productos.show',$producto->id)}}"><i class="fas fa-edit"></i></a></td>
              </tr>
             @endforeach
            </tbody>
          </table>
       
    </form>
@endsection