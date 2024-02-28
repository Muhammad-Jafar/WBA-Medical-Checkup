@if ($model->status == 'PENDING')
	<span class="badge bg-warning">
		{{ $model->status }}
	</span>
@elseif ($model->status == 'APPROVED')
	<span class="badge bg-success">
		{{ $model->status }}
	</span>
@else
    <span class="badge bg-danger">
        {{ $model->status }}
    </span>
@endif
