<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success doctor-edit"
                data-bs-toggle="modal" data-bs-target="#editDoctorModal">
                <i class="bi bi-pencil-square"></i> Edit
        </button>
    </div>

    <div class="mx-1">
        <form action="{{ route('doctor.destroy', $model->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger delete-dialog">
                <i class="bi bi-trash2-fill"></i> Hapus
            </button>
        </form>
    </div>
</div>
