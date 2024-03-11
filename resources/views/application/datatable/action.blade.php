<div class="btn-group" role="group">
    @if ($model->status == 'PENDING')
        <div class="mx-1">
            <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success doctor-edit"
                    data-bs-toggle="modal" data-bs-target="#processApplicantModal">
                    <i class="bi bi-arrow-right"></i> Proses
            </button>
        </div>

        <div class="mx-1">
            <form action="{{ route('application.cancel', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" class="btn btn-sm btn-warning cancel-dialog">
                    <i class="bi bi-x-circle"></i> Batalkan
                </button>
            </form>
        </div>
    @elseif ($model->status == 'REJECTED')
        <div class="mx-1">
            <form action="{{ route('application.destroy', $model->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger delete-dialog">
                    <i class="bi bi-trash3"></i> Hapus
                </button>
            </form>
        </div>
    @endif
    
</div>
