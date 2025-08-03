<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
    <title>Login - {{ config('app.name') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/css/dashboard.css'])
    @livewireStyles

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
</head>

<body class="hold-transition login-page">
    <div class="container">
        <div class="login-box d-flex flex-column justify-content-center align-items-center vh-100">
            <div class="login-logo">
                <a href="{{ route('home') }}">
                    <h5>{{ config('app.name') }}</h5>
                </a>
            </div>
            <!-- /.login-logo -->
            <div class="card w-75">

                <div class="card-body login-card-body">
                    <p class="login-box-msg">Entre para iniciar sua sessão</p>

                    <form action="{{ route('login') }}" method="POST">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="{{ __('Email Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="bi bi-envelope"></span>
                                </div>
                            </div>
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="bi bi-lock"></span>
                                </div>
                            </div>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary w-100">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                    </form>


                </div>
                <!-- /.login-card-body -->
                <!-- card-footer -->
                <div class="card-footer py-5">
                    <div class="social-auth-links text-center mb-3">
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="bi bi-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="bi bi-google mr-2"></i> Sign in using Google+
                        </a>
                    </div>
                    <!-- /.social-auth-links -->
                    <p class="mb-1 w-100 text-center p-2">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                        @endif
                    </p>
                    <!-- <p class="mb-0 w-100 text-center p-2">
                            <a href="register.html" class="text-center">Register a new membership</a>
                        </p> -->
                </div>
            </div>
            <!-- /.card -->
        </div>
        <!-- /.login-box -->
    </div>

    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../../dist/js/adminlte.min.js"></script>
</body>

</html>