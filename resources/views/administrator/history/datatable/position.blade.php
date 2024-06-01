@if($model->position === 'admin')
    <span class="badge bg-primary font-bold">
        {{ $model->position }}
    </span>
@else
    <span class="badge bg-light-secondary font-bold">
        {{ $model->position }}
    </span>
@endif
