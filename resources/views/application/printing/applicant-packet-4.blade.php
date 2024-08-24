<p class="paragraf">
    &nbsp; &nbsp; &nbsp;
    Pada hari ini {{ strtoupper(getDayname()) }}, {{ monthToFullBulan(date('Y')) }}. Telah dilakukan pemeriksaan
    urine pasien dan hasilnya <b>Ditemukan</b> / <b>Tidak Ditemukan</b> unsur narkoba dan jenis :
</p>

<table class="border-table">
    <thead>
    <tr>
        <td><b>No</b></td>
        <td><b>Jenis</b></td>
        <td><b>Hasil</b></td>
        <td><b>No</b></td>
        <td><b>Jenis</b></td>
        <td><b>Hasil</b></td>
        <td><b>No</b></td>
        <td><b>Jenis</b></td>
        <td><b>Hasil</b></td>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>1.</td>
        <td>Amphetamine</td>
        <td>{{ $applicant->amphe }}</td>
        <td>3.</td>
        <td>Benzodiazepine</td>
        <td>{{ $applicant->benzo }}</td>
        <td>5.</td>
        <td>Cocain</td>
        <td>{{ $applicant->cocain }}</td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Methamphetamine (Includes Ecstasy)</td>
        <td>{{ $applicant->metham }}</td>
        <td>4.</td>
        <td>Tetrahidrokannabinol (THC)</td>
        <td>{{ $applicant->thc }}</td>
        <td>6.</td>
        <td>Opiate</td>
        <td>{{ $applicant->opiate }}</td>
    </tr>
    </tbody>
</table>
