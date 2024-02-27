@if ($model->status == 'PENDING')
	<span class="badge bg-light-warning">
		{{ $model->status }}
	</span>
@elseif ($model->status == 'APPROVED')
	<span class="badge bg-light-success">
		{{ $model->status }}
	</span>
@else
    <span class="badge bg-light-danger">
        {{ $model->status }}
    </span>
@endif
