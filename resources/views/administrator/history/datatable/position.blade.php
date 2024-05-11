@if($model->position === 'ADMIN')
    <span class="badge rounded-pill bg-light-success">{{ $model->position }}</span>
@else
    <span class="badge rounded-pill bg-light-success">{{ $model->position }} </span>
@endif
