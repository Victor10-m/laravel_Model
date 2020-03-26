
<div class="modal fade" id="editmodal-{{$nota->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar Nota</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

            <!-- formulario de agregar -->
            <form action="{{route('notas.update', $nota->id ) }}" method="POST">
         @method('PUT')
         @csrf

        <input type="text" name="nombre" placeholder="Nombre" class="form-control mb-2"
        value="{{ $nota->nombre }}">

        <input  type="text" name="descripcion" placeholder="Descripcion" class="form-control mb-2"
        value="{{ $nota->descripcion }}">

        <label> Estado</label>
        @if($item->status==1)
        <input name="status" checked=true type="checkbox" id="cbox2" value="second_checkbox">
        @else
        <input name="status" type="checkbox" id="cbox2" value="second_checkbox">
        @endif  <br>

        <label > Clasificacion</label>
        <select name="clasificacion" id="">
        <option value="1">Clasificacion 1</option>
        <option value="2">Clasificacion 2</option>
        <option value="3">Clasificacion 3</option>
        </select>
        <br>
        <label>Tipo</label>
        <br>
        <label>publico</label> <input type="radio" name="tipo" value="publico">
        <label>privado</label>  <input type="radio" name="tipo" value="privado">

        <button  type="submit" class="btn btn-primary btn-block">editar</button>

      </form>
    <!-- termina formulario de agregar -->

    </div>
          <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
    </div>
  </div>
</div>
