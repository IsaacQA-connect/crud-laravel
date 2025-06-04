<!-- Modal -->
<div class="modal fade" id="create" tabindex="-1" aria-labelledby="createLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="createLabel">Agregar Nota</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{route('notas.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="" class="form-label">Tarea</label>
                <input
                    type="text"
                    class="form-control"
                    name="tarea"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Tarea"/>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Descripción</label>
                <input
                    type="text"
                    class="form-control"
                    name="descripcion"
                    id=""
                    aria-describedby="helpId"
                    placeholder="Descripción"/>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar</button>
      </div>
      </form>
    </div>
  </div>
</div>