<!-- Button trigger modal -->
  <!-- Modal -->
<form method="POST" action="{{ route('fontes.destroy', $fontes->id) }}" enctype="multipart/form-data">
    @csrf
    @method('DELETE')
    <div class="modal fade" id="ModalDelete{{$fontes->id}}" tabindex="-1" role="dialog"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Eliminar fontes
                </h5>
                <button type="button" class="close" data-dismiss="modal"
                    aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                Tens a certeza que pretendes eliminar o
                fonte?
                <input type="text" name="fonte_deleted_id" id="fonte_id" value="{{$fontes->id}}">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">Cancelar</button>
                    <button type="submit"
                        class="btn btn-primary">Confirmar</button>
            </div>
        </div>
    </div>
    </div>
</form>
