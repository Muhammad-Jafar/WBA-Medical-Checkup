<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-primary rounded-3 patient-detail"
            data-bs-toggle="modal" data-bs-target="#showPatientModal">
            <i class="bi bi-eye"></i>
        </button>
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success rounded-3 patient-edit"
                data-bs-toggle="modal" data-bs-target="#editPatientModal">
                <i class="bi bi-pencil-square"></i>
        </button>
    </div>

    @hasrole('admin')
        <div class="mx-1">
            <form action="{{ route('patient.destroy', $model->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger rounded-3 delete-dialog">
                    <i class="bi bi-trash3"></i>
                </button>
            </form>
        </div>
    @endrole
</div>
