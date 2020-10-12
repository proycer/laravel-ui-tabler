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
                        <form class="card" action="{{ route('password.email') }}" method="post">
                            @csrf
                            <div class="card-body p-lg-5 p-md-2">
                                <div class="card-title">Forgot password</div>
                                <div class="card-subtitle">Enter your email address and your password will be reset and emailed to you.</div>

                                @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                                @endif

                                <div class="form-group">
                                    <label class="form-label">Email address</label>
                                    <input type="email" name="email" value="{{ old('email') }}" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" aria-describedby="email" placeholder="Enter email">
                                    @error('email')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Send me new password</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Forget it, <a href="{{ route('login') }}">send me back</a> to the sign in screen.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
