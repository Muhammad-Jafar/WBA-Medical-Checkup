<br>
Dari hasil pemeriksaan fisik:
<table style="width: auto;">
    <tbody>
    <tr>
        <td>a.</td>
        <td>Tinggi badan</td>
        <td>:</td>
        <td> {{ $applicant ? $applicant->height_body : "-" }}</td>
        <td>cm</td>
    </tr>
    <tr>
        <td>b.</td>
        <td>Berat badan</td>
        <td>:</td>
        <td> {{ $applicant ? $applicant->mass_body : "-" }}</td>
        <td>kg</td>
    </tr>
    </tbody>
</table>

