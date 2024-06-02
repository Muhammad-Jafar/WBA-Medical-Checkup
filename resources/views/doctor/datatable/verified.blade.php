@php
    $verifiedIcon = $model->verified == 'TRUE' ? 'bi bi-patch-check-fill text-primary' : 'bi bi-patch-exclamation-fill text-warning';
    $verifiedText = $model->verified == 'TRUE' ? 'text-primary font-bold' : 'text-warning font-bold'
@endphp

<span class="d-flex justify-content-start">
        <i class="{{ $verifiedIcon }} me-2"></i>
        <h6 class="{{ $verifiedText }} mt-1"> Terverifikasi </h6>
</span>
