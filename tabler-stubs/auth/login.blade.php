<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    <div class="page">
        <div class="page-single">
            <div class="container-xl">
                <div class="row">
                    <div class="col-lg-4 offset-lg-4 col-login ">
                        <div class="text-center mt-6 mb-4">
                            <img src="https://preview-dev.tabler.io/static/logo.svg" class="h-5" alt="">
                        </div>
                        <form class="card" action="{{ url('/login') }}" method="post">
                            @csrf
                            <div class="card-body p-lg-5 p-md-2">
                                <div class="card-title">Login to your account</div>
                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" aria-describedby="email" placeholder="Enter email">
                                    @error('email')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="form-label">
                                        Password
                                        <a href="{{ route('password.request') }}" class="float-right small">I forgot password</a>
                                    </label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" />
                                        <span class="custom-control-label">Remember me</span>
                                    </label>
                                </div>
                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>