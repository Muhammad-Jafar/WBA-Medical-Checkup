<table style="width: auto">
    <tbody>
    <tr>
        <td>1.</td>
        <td>Nama</td>
        <td>:</td>
        <td>
            <b>{{ strtoupper($applicant->patients->name) }}</b>
        </td>
    </tr>
    <tr>
        <td>2.</td>
        <td>Tempat, tanggal lahir</td>
        <td>:</td>
        <td>
            {{ strtoupper($applicant->patients->born_place) }}
            , {{ monthToFullBulan($applicant->patients->born_date) }}
        </td>
    </tr>
    <tr>
        <td>3.</td>
        <td>Jenis kelamin</td>
        <td>:</td>
        <td>
            @if ($applicant->patients->gender == 1)
                LAKI-LAKI
            @else
                PEREMPUAN
            @endif
        </td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Pekerjaan</td>
        <td>:</td>
        <td> {{ strtoupper($applicant->patients->occupation) }}</td>
    </tr>
    <tr>
        <td>5.</td>
        <td>Alamat</td>
        <td>:</td>
        <td> {{ strtoupper($applicant->patients->address) }} </td>
    </tr>
    <tr>
        <td>4.</td>
        <td>Atas permintaan</td>
        <td>:</td>
        <td> SENDIRI</td>
    </tr>
    </tbody>
</table>
