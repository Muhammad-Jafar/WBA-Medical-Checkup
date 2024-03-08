<div class="btn-group" role="group">
    <div class="mx-1">
        <form action="{{ route('application.restore.history', $model->id) }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-success btn-sm restore-button">
                <i class="bi bi-arrow-bar-left"></i> Kembalikan
            </button>
        </form>
    </div>

    <div class="mx-1">
        <form action="{{ route('application.destroy.history', $model->id) }}" method="POST">
            @csrf @method('DELETE')
            <button type="submit" class="btn btn-danger btn-sm delete-permanent-button">
                <i class="bi bi-trash-fill"></i> Tetap Hapus
            </button>
        </form>
    </div>
</div>