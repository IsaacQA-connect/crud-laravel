<!-- Modal edit -->
<div class="modal fade" id="edit{{$row->id}}" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createLabel">Editar Nota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('notas.update',$row->id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="" class="form-label">Tarea</label>
                <input
                    type="text"
                    class="form-control"
                    name="tarea"
                    id=""
                    aria-describedby="helpId"
                    value="{{$row->tarea}}" />
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input
                    type="text"
                    class="form-control"
                    name="descripcion"
                    id=""
                    aria-describedby="helpId"
                    value="{{$row->descripcion}}" />
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal delete -->
<div class="modal fade" id="delete{{$row->id}}" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createLabel">Eliminar Nota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('notas.destroy',$row->id)}}" method="post">
            @csrf
            @method('DELETE')
            ¿Estas seguro de eliminar la siguiente tarea? <br> {{$row->tarea}}
            </div>  
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-primary">Confirmar</button>
      </div>
      </form>
    </div>
  </div>
</div>