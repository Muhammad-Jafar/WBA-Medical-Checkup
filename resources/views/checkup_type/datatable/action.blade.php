<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success checkup-type-edit"
                data-bs-toggle="modal" data-bs-target="#editCheckupTypeModal">
                <i class="bi bi-pencil-square"></i> Edit
        </button>
    </div>

    <div class="mx-1">
        <form action="{{ route('checkup-type.destroy', $model->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger delete-dialog">
                <i class="bi bi-trash3"></i> Hapus
            </button>
        </form>
    </div>
</div>
