@if($model->is_active == 1)
    <div class="d-flex justify-content-start">
        <i class="bi bi-circle-fill text-success me-2"></i>
        <h6 class="text-success font-extrabold mt-1">Aktif</h6>
    </div>
@else
    <div class="d-flex justify-content-start">
        <i class="bi bi-circle-fill text-secondary me-2"></i>
        <h6 class="text-secondary font-extrabold mt-1">Tidak aktif</h6>
    </div>
@endif
