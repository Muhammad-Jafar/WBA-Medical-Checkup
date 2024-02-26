<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-primary patient-show"
            data-bs-toggle="modal" data-bs-target="#showPatientModal">
            <i class="bi bi-eye"></i> Lihat
        </button>
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success patient-edit"
                data-bs-toggle="modal" data-bs-target="#editPatientModal">
                <i class="bi bi-pencil-square"></i> Edit
        </button>
    </div>

    <div class="mx-1">
        <form action="{{ route('patient.destroy', $model->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-sm btn-danger delete-dialog">
                <i class="bi bi-trash-fill"></i> Hapus
            </button>
        </form>
    </div>
</div>
