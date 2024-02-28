<div class="btn-group" role="group">
    <div class="mx-1">
        <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success doctor-edit"
                data-bs-toggle="modal" data-bs-target="#editDoctorModal">
                <i class="bi bi-plus-circle"></i> Terima
        </button>
    </div>

    <div class="mx-1">
        <form action="#" method="POST">
            {{-- @csrf @method('DELETE') --}}
            <button type="submit" class="btn btn-sm btn-danger delete-dialog">
                <i class="bi bi-dash-circle"></i> Tolak
            </button>
        </form>
    </div>
</div>
