<div class="btn-group" role="group">

    @if ($model->status == 'PENDING')
        <div class="mx-1">
            <form action="{{ route('application.approve', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" data-id="{{ $model->id }}" class="btn btn-sm btn-success rounded-3 print-window">
                    <i class="bi bi-printer"></i>
                </button>
            </form>
        </div>

        @hasrole('admin')
        <div class="mx-1">
            <form action="{{ route('application.cancel', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" class="btn btn-sm btn-warning rounded-3 cancel-dialog">
                    <i class="bi bi-x-circle"></i>
                </button>
            </form>
        </div>
        @endrole

        <div class="mx-1">
            <button type="button" data-id="{{ $model->id }}"
                    class="btn btn-sm btn-light-primary rounded-3 applicant-edit"
                    data-bs-toggle="modal" data-bs-target="#editApplicantModal">
                <i class="bi bi-pencil"></i>
            </button>
        </div>
    @elseif ($model->status == 'REJECTED')
        <div class="mx-1">
            <form action="{{ route('application.undo', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" class="btn btn-sm btn-success rounded-3 undo-dialog">
                    <i class="bi bi-arrow-counterclockwise"></i>
                </button>
            </form>
        </div>
        <div class="mx-1">
            <form action="{{ route('application.destroy', $model->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger rounded-3 delete-dialog">
                    <i class="bi bi-trash3"></i>
                </button>
            </form>
        </div>
    @endif

</div>
