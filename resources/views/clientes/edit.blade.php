@extends('plantilla.plantilla')

@section('contenido')
   <h3>Editar Cliente</h3>
    <form class="formulario" action="/clientes/{{$cliente->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="PUT">
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
        <input class="btn btn-success" type="submit" value="Editar">
    </form>

    <form action="/clientes/{{$cliente->id}}" method="post">
        @csrf
        <input type="hidden" name="_method" value="DELETE">
        <input class="btn btn-danger" id="btnEliminar" type="submit" value="eliminar">
    </form>

    
    {{-- <script>
        document.querySelector("#btn-eliminar").addEventListener('click',(e)=>{
          

            Swal.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, delete it!'
}).then((result) => {
  if (result.isConfirmed) {
    location.href =
    Swal.fire(
      'Deleted!',
      'Your file has been deleted.',
      'success'
    )
  }
})
        })
    </script>
   --}}

@endsection