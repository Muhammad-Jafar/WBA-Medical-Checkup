<!DOCTYPE html>
<html lang="en">
<style>
    @media print{.no-print,.no-print *{display:none!important}}

    body {
        /* width: 21.5cm;
        height: 33cm; */
        margin: auto;
        padding: 0;
        font-family: 'Arial', sans-serif;
        /* background: blanchedalmond */
    }

    table {
    width: 100%;
    border: 0;
    cellspacing: 0;
    cellpadding: 0;
    align: center;
    }

    h3 {
        text-align: center;
        padding-top: 0;
        margin-top: 0;
        font-family: 'Arial', sans-serif;
    }

    headerTitlePertama {
        font-size: 14pt;
    }

    headerTitleTwo {
        font-size: 16pt;
    }

    headerTitleThree {
        font-size: 10pt;
        font-weight: normal;
    }
</style>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SKBS</title>
</head>
<body>
    
    <div class="page-portrait">
        <table>
            <tbody>
                <tr>
                    {{-- <td width="10%" class="center">
                    <img src="{{ asset('images/logo/logo.png') }}" alt="Kab. buton logo" style="width:70px; height:90px; position:absolute;"/>
                    </td> --}}
                    <td>
                        <h3>
                            <headerTitlePertama>PEMERINTAH KABUPATEN BUTON</headerTitlePertama>
                            <br>
                            <b class="headerTitleTwo">BADAN LAYANAN UMUM DAERAH (BLUD)</b>
                            <br>
                            <b class="headerTitleOne"">RUMAH SAKIT UMUM DAERAH</b>
                            <br>
                            <headerTitleThree>Jln.Balai Kota No...Telp/Fax .   Email : butonrsud@gmail.com</headerTitleThree>
                            <br>
                            <b class="headerTitleOne"">P A S A R W A J O</b>
                        </h3>
                    </td>
                </tr>
            </tbody>
        </table>


        <hr height="2" color="#000000" border-style="outset" border-width="3px"
            style="line-height:normal; margin-top:-12pt;"/>
        <h4 style="text-align:center;
            font-family: 'Arial', sans-serif;
            margin-top:12.0pt;
            text-align:center;
            line-height:normal"> <u>SURAT KETERANGAN BERBADAN SEHAT</u></h4>
        <h4 style="text-align:center;
            font-family: 'Arial', sans-serif;
            margin-top:-14pt;
            text-align:center;
            line-height:normal">No. 400.7 / <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> <bnsp> / {{ monthToBulanRomawi(date('m')) }} / {{ date("Y") }}</h4>

        <o:p>
        <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify; line-height:1.5">
            &nbsp; &nbsp; &nbsp;
            Yang bertanda tangan di bawah ini <b> dr. {{ strtoupper($applicant->doctors->name) }}.</b>
            Dokter Pemeriksa Badan Layanan Umum Daerah (BLUD) Rumah Sakit Umum Daerah Kabupaten Buton, yang dalam
            Hal ini menjalankan tugasnya dengan mengingat sumpah yang telah diucapkan waktu menerima jabatan, menerangkan bahwa telah
            memeriksa dengan teliti seorang:
        </p>
        <o:p>

        <table>
            <tbody style="font-family: 'Arial', sans-serif; line-height:2">
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
                    <td> {{ strtoupper($applicant->patients->born_place) }}, {{ monthToFullBulan($applicant->patients->born_date) }}</td>
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
        <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify; line-height:1.5">
            &nbsp; &nbsp; &nbsp;
            Dari hasil pemeriksaan fisik yang dilakukan, maka yang bersangkutan dinyatakan
            <i> <b> Sehat / Tidak sehat </b></i> Kesehatan Fisiknya, dan tidak menjamin yang bersangkutan
            <i><b>BEBAS infeksi COVID-19</b></i>. Surat keterangan ini dipergunakan untuk keperluan :
        </p>

        <h3 style="font-family: 'Arial', sans-serif; text-align: center; line-height:1.5">
            " {{ strtoupper($applicant->purposes) }} "
        </h3>

        <p style="font-family: 'Arial', sans-serif; font-size:12pt; text-align:justify; line-height:1.5">
            &nbsp; &nbsp; &nbsp;
            Demikian surat keterangan ini diberikan untuk dipergunakan sebagaimana mestinya.
        </p>
        <o:p>

        <table>
            <tbody style="font-family: 'Arial', sans-serif; ">
                <tr>
                    <td width="70%"></td>
                    <td width="30%" align="center">Pasarwajo, {{ date('d') }} {{ monthToBulan(date('m')) }} {{ date('Y') }} </td>
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
                    <td width="40%" align="center"> NIP. {{ $applicant->doctors->nip }} </td>
                </tr>
            </tbody>
        </table>
    </div>

    <script>
        window.open('{{ route("application.export") }}', '_blank');
    </script>

</body>
</html>
