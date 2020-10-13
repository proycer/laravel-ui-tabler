<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="UTF-8">
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>

        <title>{{ config('app.name') }}</title>

        <link href="{{ mix('css/app.css') }}" rel="stylesheet">

        @yield('third_party_stylesheets')
        @stack('page_css')
    </head>

    <body class="antialiased">
        <div class="page">
            @include('layouts.navbar')
            <div class="content">
                @yield('content')
                @include('layouts.footer')
            </div>
        </div>

        <script src="{{ mix('js/app.js') }}"></script>
        @yield('third_party_scripts')
        @stack('page_scripts')
    </body>

</html>
