@if ($model->is_paid == 'PENDING')
		<span class="badge rounded-pill bg-warning">
			{{ $model->is_paid }}
		</span>
	@elseif ($model->is_paid == 'APPROVED')
		<span class="badge rounded-pill bg-success">
			{{ $model->is_paid }}
		</span>
	@elseif ($model->is_paid == 'REJECTED')
	<span class="badge rounded-pill bg-danger">
		{{ $model->is_paid }}
	</span>
@endif

<span class="badge rounded-pill bg-warning">
	PENDING
</span>
