@if($model->verified == 'TRUE')
    <span class="d-flex justify-content-start">
        <i class="bi bi-patch-check-fill text-primary me-2"></i>
        <h6 class="text-primary font-bold mt-1"> Terverifikasi</h6>
    </span>
@else
    <span class="d-flex justify-content-start">
        <i class="bi bi-patch-exclamation-fill text-warning me-2"></i>
        <h6 class="text-warning font-bold mt-1">Belum terverifikasi</h6>
    </span>
@endif
