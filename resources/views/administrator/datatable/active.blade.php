@if($model->is_active == 1)
    <span class="badge rounded-pill bg-success"> {{$model->position}}</span>
@else
    <span class="badge rounded-pill bg-light-success">Ga aktid</span>
@endif
