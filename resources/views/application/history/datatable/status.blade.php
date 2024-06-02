@php
    $status = [
        'PENDING' => 'bg-light-warning',
        'APPROVED' => 'bg-light-success',
    ]
@endphp

<span class=" badge rounded-pill {{ $status[$model->status] ?? 'bg-light-danger' }} ">
        {{ Str::title($model->status) }}
</span>
