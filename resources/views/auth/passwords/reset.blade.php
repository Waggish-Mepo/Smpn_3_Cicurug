{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Passworsd') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <input type="hidden" name="token" value="{{ $token }}">

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                        autofocus>

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
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Reset Password') }}
                                    </button>
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
    <link rel="stylesheet" href="/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="/vendor/bootstrap/icons-1.7.2/font/bootstrap-icons.css">

    <!--Auth Css-->
    <link rel="stylesheet" href="/css/auth.css">
</head>

<body>

    <div id="auth">
        <div class="imagesAuth">
            <img src="/img/auth.png" alt="">
        </div>
        <div class="sectionFormAuth">
            <div class="headAuth">
                <h1>Masukan Password Baru Anda</h1>
            </div>


            <form class="formAuth" method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="mb-3 inputForm passwordForm">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus
                        placeholder="email anda">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="/img/iconLock.svg" alt="">
                        </label>
                    </div>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password" placeholder="Password baru">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 inputForm passwordForm">
                    <div class="icon">
                        <label for="password">
                            <img src="/img/iconLock.svg" alt="">
                        </label>
                    </div>
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                        required autocomplete="new-password" placeholder="Konfirmasi baru">
                </div>

                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button type="submit" class="btn btnPrimary">
                        {{ __('Reset Password') }}
                    </button>
                </div>
            </form>
        </div>
    </div>




    <!--Vendor-->
    <!--Bootstrap JS-->
    <script src="/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
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
