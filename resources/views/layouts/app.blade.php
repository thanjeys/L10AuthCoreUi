<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('vendors/coreui/assets/favicon/favicon-16x16.png')}}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link rel="stylesheet" href="{{ asset('vendors/simplebar/css/simplebar.css')}}">
    <link rel="stylesheet" href="{{ asset('vendors/coreui/css/coreui_pro.min.css')}} ">
</head>
<body>
    @include('partials.sidebar')

    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        @include('partials.header')
        <div class="body flex-grow-1 px-3">
            <div class="container-lg">
                @yield('content')
            </div>
        </div>
        @include('partials.footer')
    </div>

    <script src="{{ asset('vendors/simplebar/js/simplebar.min.js')}}"></script>
    <script src="{{ asset('vendors/coreui/js/coreui.bundle.min.js')}}"></script>
</body>
</html>
