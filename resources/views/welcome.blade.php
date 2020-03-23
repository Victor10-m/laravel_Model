@extends('Plantilla')

@section('seccion')

<div class="container my-4">
    <h1 class="display-4">Notas</h1>

<!-- esta estructura nos manda el mensaje de alerta que que nuestros campos no 
estan llenos  -->

    @error('nombre')
        <div class="alert alert-danger">
        El campo nombre es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
        <span aria-hidden="true">&times;</span>
        </button>
        </div>

      @enderror
      
    @error('descripcion')
        <div class="alert alert-danger">
        El campo descripcion  es obligatorio
        <button type="button" class="close" data-dismiss="alert" aria-label="Close" >
        <span aria-hidden="true">&times;</span>
        </button>
        </div>

      @enderror


<!-- boton para agregar notas con modal de boostrap -->
    <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#exampleModal">
  Agregar
</button>

    <table class="table">
  <thead>
    <tr>
      <th scope="col">#id</th>
      <th scope="col">nombre</th>
      <th scope="col">descripcion</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
  @foreach($notas as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>
      <a href=" {{route('notas.detalle', $item)}} ">{{$item->nombre}}</td></a>
      
      <td>{{$item->descripcion}}</td>
      <td>@mdo</td>
    </tr>
   @endforeach()
 
  </tbody>
</table>

    </div>


<!-- plantilla de la funcion modal de boostrap -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Agregar Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <!-- formulario de agregar -->
            <form action="{{route('notas.crear')}}" method="POST">
      @csrf

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
        value="{{ old('nombre') }}">
        <input  type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
        value="{{ old('descripcion') }}">
        <button  type="submit" class="btn btn-primary btn-block">Guardar</button>
      </form>
    <!-- termina formulario de agregar -->

     </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>






 @endsection
