@if($model->position === 'ADMIN')
    <span class="font-bold">{{ $model->position }}</span>
@else
    <span class="font-bold">{{ $model->position }} </span>
@endif
