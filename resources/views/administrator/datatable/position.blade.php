@if($model->position === 'admin')
    <span class="badge bg-primary font-bold">
        {{ Str::title($model->position) }}
    </span>
@else
    <span class="badge bg-light-secondary font-bold">
        {{ Str::title($model->position) }}
    </span>
@endif
