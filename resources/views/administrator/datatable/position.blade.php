@if($model->position === 'ADMIN')
    <span class="badge bg-light-primary rounded-pill font-extrabold">{{ $model->position }}</span>
@else
    <span class="badge bg-light-secondary rounded-pill font-extrabold">{{ $model->position }} </span>
@endif
