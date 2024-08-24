<p class="paragraf">
    &nbsp; &nbsp; &nbsp;
    Demikian surat keterangan ini diberikan untuk dipergunakan sebagaimana mestinya.
</p>

<table>
    <tbody>
    <tr>
        <td style="width: 70%"></td>
        <td style="width: 30%; text-align: center">
            Pasarwajo, {{ date('d') }} {{ monthToBulan(date('m')) }} {{ date('Y') }}
        </td>
    </tr>
    <tr>
        <td style="width: 70%"></td>
        <td style="width: 30%; text-align: center">
            Dokter Pemeriksa
        </td>
    </tr>
    <tr>
        <td height="70px"></td>
    </tr>
    <tr>
        <td style="width: 60%"></td>
        <td style="width: 40%; text-align: center">
            <b><u>dr. {{ strtoupper($applicant->doctors->name) }} </u></b>
        </td>
    </tr>
    <tr>
        <td style="width: 60%"></td>
        <td style="width: 40%; text-align: center">
            NIP. {{ $applicant->doctors->nip }}
        </td>
    </tr>
    </tbody>
</table>
