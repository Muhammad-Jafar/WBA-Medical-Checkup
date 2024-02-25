<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-primary patient-show"
            data-bs-toggle="modal" data-bs-target="#editStudentModal">
            <i class="bi bi-eye"></i> Lihat
    </button>
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success patient-edit"
                data-bs-toggle="modal" data-bs-target="#editStudentModal">
                <i class="bi bi-pencil-square"></i> Edit
        </button>
    </div>

    <div class="mx-1">
            {{-- <form action="" method="POST">
                @csrf @method('DELETE')
            </form> --}}
            <button type="submit" class="btn btn-sm btn-danger delete-notification">
                <i class="bi bi-trash-fill"></i> Hapus
            </button>
    </div>
</div>