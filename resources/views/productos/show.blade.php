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
              </tr>
            </thead>
            <tbody>
             <tr>
                <td>{{$producto->id}}</td>
                <td>{{$producto->nombre}}</td>
                <td>{{$producto->cantidad}}</td>
              </tr>
            </tbody>
          </table>
       
    </form>
@endsection