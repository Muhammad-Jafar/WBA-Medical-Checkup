<!DOCTYPE html>
<html lang="en">
{{-- <style>
    @media print{.no-print,.no-print *{display:none!important}}
    @font-face {
        font-family: 'Tim News Roman';
        font-style: normal;
        font-weight: 400;
        src: url('https://s3-us-west-2.amazonaws.com/lob-assets/timesnewroman.ttf') format('truetype');
    }

    *, *:before, *:after {
        -webkit-box-sizing: border-box;
        -moz-box-sizing: border-box;
        box-sizing: border-box;
    }

    ::selection { background-color: #E13300; color: white; }
    ::-moz-selection { background-color: #E13300; color: white; }

    body {
        /* width: 11.7in; */
        /* height: 8.27in; */
        margin: auto;
        padding: 0;
        font-family: 'Arial';
        background-color: #fff;
        margin: 20px;
        font: 13px/20px normal Helvetica, Arial, sans-serif;
        color: #4F5155;
    }

    .page-portrait {
        page-break-after: always;
        visibility: visible;
        padding: .5rem;
    }


    .page-content {
        margin-left: 5rem;
        margin-right: 5rem;

    }

    .wrapper {
        position: absolute;
        top: 0in;
    }

    .signature {
        font-family: 'Times New Roman';
        font-weight: bold;
        font-size: 1rem;
        text-align: left;
    }

    main {
    width: 70%;
    padding: 20px;
    background-color: white;
    min-height: 300px;
    border-radius: 5px;
    margin: 30px auto;
    box-shadow: 0 0 8px #D0D0D0;
    }
    table {
    border-top: solid thin #000;
    border-collapse: collapse;
    }
    th, td {
    border-top: solid thin #000;
    padding: 6px 12px;
    }

        a {
    color: #003399;
    background-color: transparent;
    font-weight: normal;
    }
</style>  --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SKBS</title>
</head>
<body>
    <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody>
            <tr>
                {{-- <td width="10%" class="center">
                <img src="{{ asset('images/logo/kabbuton.png') }}" style="width:70px; height:90px"/>
                </td> --}}
                <td class="center">
                    <h3 style="text-align:center; font-family: 'Arial', sans-serif;">
                        <b style="font-size:14pt;">PEMERINTAH KABUPATEN BUTON</b>
                        <br>
                        <b style="font-size:16pt;">BADAN LAYANAN UMUM DAERAH (BLUD)</b>
                        <br>
                        <b style="font-size:14pt;">RUMAH SAKIT UMUM DAERAH</b>
                        <br>
                        <b style="font-size:10pt; font-weight:normal">Jln.Balai Kota No...Telp/Fax .   Email : butonrsud@gmail.com</b>
                        <br>
                        <b style="font-size:14pt;">P A S A R W A J O</b>
                    </h3>
                </td>
            </tr>
        </tbody>
    </table>


    <hr height="2" color="#000000" border-style="outset" border-width="3px"
        style="line-height:normal; margin-top:-12.0pt;"/>
    <h4 style="text-align:center;
        font-family: 'Arial', sans-serif;
        margin-top:12.0pt;
        text-align:center;
        line-height:normal"> <u>SURAT KETERANGAN BERBADAN SEHAT</u></h4>
    <h4 style="text-align:center;
        font-family: 'Arial', sans-serif;
        margin-top:-14pt;
        text-align:center;
        line-height:normal">No. 400.7 / <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> / II / {{ date("Y") }}</h4>

    <o:p>
    <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify">
        &nbsp; &nbsp; &nbsp;
        Yang bertanda tangan di bawah ini <b> dr. {{ $applicant->doctors->name }}.</b>
        Dokter Pemeriksa Badan Layanan Umum Daerah (BLUD) Rumah Sakit Umum Daerah Kabupaten Buton, yang dalam
        Hal ini menjalankan tugasnya dengan mengingat sumpah yang telah diucapkan waktu menerima jabatan, menerangkan bahwa telah
        memeriksa dengan teliti seorang:
    </p>
    <o:p>

    <o:p>
    <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody style="font-family: 'Arial', sans-serif;">
            <tr>
                <td width="5%">1.</td>
                <td width="30%">Nama</td>
                <td width="2%">:</td>
                <td width="60%"> <b> {{ strtoupper($applicant->patients->name) }}</b> </td>
            </tr>
            <tr>
                <td>2.</td>
                <td>Tempat, tanggal lahir</td>
                <td>:</td>
                <td> {{ strtoupper($applicant->patients->born_place) }}, {{ date('d M Y', strtotime($applicant->patients->born_date)) }}</td>
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
                <td> SENDIRI </td>
            </tr>

        </tbody>
    </table>

    <o:p>
    <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify; ">
        &nbsp; &nbsp; &nbsp;
        Dari hasil pemeriksaan fisik yang dilakukan, maka yang bersangkutan dinyatakan
        <i> <b> Sehat / Tidak sehat </b></i> Kesehatan Fisiknya, dan tidak menjamin yang bersangkutan
        <i><b>BEBAS infeksi COVID-19</b></i>. Surat keterangan ini dipergunakan untuk keperluan :
    </p>

    <o:p>
    <h3 style="font-family: 'Arial', sans-serif; text-align: center">
        " {{ strtoupper($applicant->purposes) }} "
    </h3>

    <o:p>
    <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify">
        &nbsp; &nbsp; &nbsp;
        Demikian surat keterangan ini diberikan untuk dipergunakan sebagaimana mestinya.
    </p>
    <o:p>

    <o:p>
    <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tbody style="font-family: 'Arial', sans-serif;">
            <tr>
                <td width="70%"></td>
                <td width="30%" align="center">Pasarwajo, {{ date('d M Y') }}</td>
            </tr>
            <tr>
                <td width="70%"></td>
                <td width="30%" align="center">Dokter Pemeriksa</td>
            </tr>
            <tr>
                <td height="70px"></td>
            </tr>
            <tr>
                <td width="60%"></td>
                <td width="40%" align="center"> <b><u> dr. {{ strtoupper($applicant->doctors->name) }} </u></b> </td>
            </tr>
            <tr>
                <td width="60%"></td>
                <td width="30%" align="center"> NIP. {{ $applicant->doctors->nip }} </td>
            </tr>
        </tbody>
    </table>

</body>
</html>
