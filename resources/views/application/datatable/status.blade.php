@if ($model->status == 'PENDING')
        <span class="badge bg-light-warning rounded-pill">
		{{ Str::title($model->status) }}
	</span>
@elseif ($model->status == 'APPROVED')
	<span class="badge bg-light-success rounded-pill">
		{{ Str::title($model->status) }}
	</span>
@else
    <span class="badge bg-light-danger rounded-pill">
        {{ Str::title($model->status) }}
    </span>
@endif
