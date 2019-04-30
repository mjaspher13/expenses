<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta id="token" name="token" content="{{ csrf_token() }}">
    <meta id="appName" name="appName" content="{{ config('app.name') }}">
    <meta id="appUrl" name="appUrl" content="{{ config('app.url') }}">
    <meta id="appVersion" name="appVersion" content="{{ config('app.version') }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link href="{{ asset('css/fonts.css') }}" rel="stylesheet">

    <!-- Bootstrap Core Css -->
    <link href="{{ asset('assets/bootstrap/css/bootstrap.css') }}" rel="stylesheet">

    <!-- User define stylesheets -->
    @yield('stylesheets')
    <!-- App Css-->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Style Css -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>
</head>
<body>
<div id="app">
    <main>
        @yield('content')
    </main>
</div>

<!-- User Define -->
@yield('scripts')
<!-- Jquery Core Js -->
<script src="{{ asset('assets/jquery/jquery.min.js') }}"></script>

<!-- Bootstrap Core Js -->
<script src="{{ asset('assets/bootstrap/js/bootstrap.js') }}"></script>

</body>
</html>
