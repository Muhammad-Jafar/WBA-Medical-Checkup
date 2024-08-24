<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak SKBS</title>
    @include('application.printing.printing-style')
</head>

<body>
<div class="page-portrait">
    @include('application.printing.letter-head')
    @include('application.printing.letter-open')
    @include('application.printing.applicant-credential')

    @switch($applicant->checkuptype_id)
        @case($applicant->checkuptype_id == 2)
            @include('application.printing.applicant-packet-2')
            @break
        @case($applicant->checkuptype_id == 3)
            @include('application.printing.applicant-packet-3')
            @break
        @case($applicant->checkuptype_id == 4)
            @include('application.printing.applicant-packet-4')
            @break
    @endswitch

    @if($applicant->checkuptype_id == 4)
        @include('application.printing.letter-point')
    @else
        @include('application.printing.letter-result')
        @include('application.printing.letter-point')
    @endif

    @include('application.printing.letter-close')
</div>
</body>
</html>
