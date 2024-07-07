<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Med-Checkup') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Vendors -->
    <link rel="stylesheet" href="{{ asset('vendors/perfect-scrollbar/perfect-scrollbar.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/bootstrap-icons/bootstrap-icons.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/app-dark.css') }}">

    @vite(["resources/sass/bootstrap.scss", "resources/sass/themes/dark/app-dark.scss", "resources/sass/pages/auth.scss", "resources/sass/app.scss"])

    <!-- Styles and Script -->
    @vite(
        [
        "resources/css/app.css",
        "resources/sass/bootstrap.scss",
        "resources/sass/themes/dark/app-dark.scss",
        "resources/sass/app.scss",
        "resources/sass/pages/auth.scss",
        "resources/js/app.js"
        ]
    )

</head>
<body>
<nav class="nav navbar-light">
    <div class="container d-block">
        TESTING SELF ASSIGNMENT
    </div>
    <div class="container">
        {{ $slot }}
    </div>
</nav>

@vite(["resources/js/app.js"])
@vite(["resources/js/dark.js"])
<script src="{{ asset('/js/main.js') }}"></script>
{{ $script ?? ''}}

</body>
</html>
