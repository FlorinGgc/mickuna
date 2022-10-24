<div class="modal fade" id="modal-delete-{{str_replace('.', '', $empresaresiduoindu->id)}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form action="{{ route ('empresaresiduoindu.destroy', $empresaresiduoindu->id)}}" method="POST">

    @csrf
    @method('DELETE')

    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Eliminación de registros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ¿Deseas eliminar el registro {{$empresaresiduoindu->id." ".$empresaresiduoindu->correo}}?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary fw-bold" data-bs-dismiss="modal">Cancelar</button>
        <button type="submit" class="btn btn-danger fw-bold" style="margin:13% 0" id="delete">Eliminar</button>
      </div>
    </div>
   </form>
  </div>
</div>
