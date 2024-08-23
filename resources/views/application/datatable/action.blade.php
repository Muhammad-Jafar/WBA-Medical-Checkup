<div class="btn-group" role="group">

    @if ($model->status == 'PENDING')
        <div class="mx-1">
            @csrf @method('PUT')
            {{--<form action="{{ route('application.approve', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" data-id="{{ $model->id }}" class="btn btn-sm btn-success rounded-3 print-window">
                    <i class="bi bi-printer"></i>
                </button>
            </form>--}}

            @switch($model->checkuptype_id)
                @case($model->checkuptype_id == 2)
                    <button type="button" data-id="{{ $model->id }}"
                            class="btn btn-sm btn-success rounded-3 applicant-print-second"
                            data-bs-toggle="modal" data-bs-target="#printSecondApplicantModal">
                        <i class="bi bi-printer"></i>
                    </button>
                    @break
                @case($model->checkuptype_id == 3)
                    <button type="button" data-id="{{ $model->id }}"
                            class="btn btn-sm btn-success rounded-3 applicant-print-third"
                            data-bs-toggle="modal" data-bs-target="#printThirdApplicantModal">
                        <i class="bi bi-printer"></i>
                    </button>
                    @break
                @case($model->checkuptype_id == 4)
                    <button type="button" data-id="{{ $model->id }}"
                            class="btn btn-sm btn-success rounded-3 applicant-print-four"
                            data-bs-toggle="modal" data-bs-target="#printFourApplicantModal">
                        <i class="bi bi-printer"></i>
                    </button>
                    @break
                @default
                    <button type="button" data-id="{{ $model->id }}"
                            class="btn btn-sm btn-success rounded-3 applicant-print-first"
                            data-bs-toggle="modal" data-bs-target="#printFirstApplicantModal">
                        <i class="bi bi-printer"></i>
                    </button>
            @endswitch
            {{-- <button type="button" data-id="{{ $model->id }}"
                     class="btn btn-sm btn-success rounded-3 applicant-print"
                     data-bs-toggle="modal" data-bs-target="#printApplicantModal">
                 <i class="bi bi-printer"></i>
             </button>--}}
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
    @else
        <div class="mx-1">
            <form action="{{ route('application.approve', $model->id) }}" method="POST">
                @csrf @method('PUT')
                <button type="submit" data-id="{{ $model->id }}"
                        class="btn btn-sm btn-success rounded-3 print-window">
                    <i class="bi bi-printer"></i>
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
