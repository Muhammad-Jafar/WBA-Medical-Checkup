@if($model->is_active == 1)
    <span class="badge rounded-pill bg-success"><i class="bi bi-check-lg"></i></span>
@else
    <span class="badge rounded-pill bg-danger"><i class="bi bi-x-lg"></i></span>
@endif
