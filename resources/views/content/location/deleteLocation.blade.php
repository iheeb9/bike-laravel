<form action="{{ route('location.destroy', $loc->id) }}" method="POST"enctype="multipart/form-data">
    {{method_field('delete')}}
    {{csrf_field()}}
    <div class="modal fade" id="ModalDelete{{$loc->id}}" tabindex="-1"role="dialog"aria-hidden="true">
        <div class="modal-dialog"role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">{{__('Supprimer option')}}</h4>
                    <button type="button" class="close"data-dismiss="modal"aria-label="close"></button>
                    <span aria-hidden="true">&times;</span>
                </div>
                <div class="modal-body">
                     Voulez-vous supprimer la location du <b>{{$loc->velo->nom}}</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn gray btn-outline-secondary"data-dismiss="modal">{{__('Cancel') }}</button>
                    <button type="submit"class="btn btn-outline-danger">{{__('Delete') }}</button>
                </div>
            </div>
        </div>
    </div>
</form>