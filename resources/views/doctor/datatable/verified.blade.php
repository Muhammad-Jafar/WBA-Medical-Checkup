@if($model->verified == 'TRUE')
    <span class="badge bg-light-primary">
		{{ $model->verified }}
	</span>
@else
    <span class="badge bg-light-warning">
		{{ $model->verified }}
	</span>
@endif
