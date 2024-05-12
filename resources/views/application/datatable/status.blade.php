@if ($model->status == 'PENDING')
	<span class="badge bg-light-warning rounded-pill">
		{{ $model->status }}
	</span>
@elseif ($model->status == 'APPROVED')
	<span class="badge bg-success rounded-pill">
		{{ $model->status }}
	</span>
@else
    <span class="badge bg-danger rounded-pill">
        {{ $model->status }}
    </span>
@endif
