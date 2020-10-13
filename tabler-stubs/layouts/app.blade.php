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

    <div class="modal modal-blur fade" id="logout-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="modal-title">Are you sure?</div>
                    <div>If you proceed, you account will be close.</div>
                </div>
                <div class="modal-footer">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="button" class="btn btn-link link-secondary mr-auto" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Yes, logout</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}"></script>
    @yield('third_party_scripts')
    @stack('page_scripts')
</body>

</html>
