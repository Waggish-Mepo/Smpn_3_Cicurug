{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | SMPN 3 CICURUG</title>

    <!--Bootstrap Assets-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css">

    <!--Auth Css-->
    <link rel="stylesheet" href="css/auth.css">
</head>

<body>

    <div id="auth">
        <div class="imagesAuth">
            <img src="img/auth.png" alt="">
        </div>
        <div class="sectionFormAuth">

            <div class="headAuth">
                <h1 class="">Selamat Datang</h1>
                <p>Silahkan untuk melakukan login</p>
            </div>
            <form action="/login" method="POST" class="formAuth">
                {{-- @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif --}}
                @csrf
                <div class="mb-3 inputForm">
                    <div class="icon">
                        <label for="username">
                            <img src="img/iconUser.svg" alt="">
                        </label>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-3 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="img/iconLock.svg" alt="">
                        </label>
                    </div>
                    <div class="wrapperToggle">
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="mb-4 d-flex justify-content-end">
                    @if (Route::has('password.request'))
                        <a class="forgotPassword" href="{{ route('password.request') }}">
                            Lupa Password ?
                        </a>
                    @endif
                </div>
                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button class="btn btnPrimary" type="submit">Masuk</button>
                </div>
            </form>
        </div>
    </div>


    {{-- coabaa --}}

    <!--Vendor-->
    <!--Bootstrap JS-->
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!--Script Auth-->
    <script>
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function(e) {
            // toggle the type attribute
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);

            this.classList.toggle('bi-eye-slash-fill');
        });
    </script>
</body>

</html>
