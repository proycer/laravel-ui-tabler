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
                        <form class="card" action="{{ route('register') }}" method="post">
                            @csrf
                            <div class="card-body p-lg-5 p-md-2">
                                <div class="card-title">Create new account</div>

                                <div class="form-group">
                                    <label class="form-label">Name</label>
                                    <input type="text" name="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" aria-describedby="name" placeholder="Full name">
                                    @error('name')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

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
                                    </label>
                                    <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
                                    @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="form-label">
                                        Password
                                    </label>
                                    <input type="password" name="password_confirmation" class="form-control @error('password') is-invalid @enderror" placeholder="Retype password">
                                    @error('password')
                                    <span class="error invalid-feedback">{{ $message }}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" name="terms" value="agree" />
                                        <span class="custom-control-label">I agree the <a href="#">terms and policy</a></span>
                                    </label>
                                </div>

                                <div class="form-footer">
                                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                                </div>
                            </div>
                        </form>
                        <div class="text-center text-muted">
                            Already have account? <a href="{{ route('login') }}">Sign in</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ mix('js/app.js') }}" defer></script>
</body>

</html>
