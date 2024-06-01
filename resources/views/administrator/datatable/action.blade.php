<div class="btn-group" role="group">
    @if (auth()->id() === $model->id)
        <div class="badge bg-light-secondary">Anda sedang login</div>
    @else
        <div class="mx-1">
            <button type="button" data-id="{{ $model->id }}" class="btn btn-sm btn-success rounded-3 admin-edit"
                    data-bs-toggle="modal" data-bs-target="#editAdminModal">
                <i class="bi bi-pencil-square"></i>
            </button>
        </div>

        <div class="mx-1">
            <form action="{{ route('administrator.destroy', $model->id) }}" method="POST">
                @csrf @method('DELETE')
                <button type="submit" class="btn btn-sm btn-danger rounded-3 delete-dialog">
                    <i class="bi bi-trash3"></i>
                </button>
            </form>
        </div>
    @endif

</div>
