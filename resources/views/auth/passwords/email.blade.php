{{-- @extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reset Passwssord') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
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

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Send Password Reset Link') }}
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
                <h1>Lupa kata sandi Anda?</h1>
                <p>Masukkan alamat email yang terdaftar pada aplikasi ini.</p>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }} <a href="https://mailtrap.io/inboxes/1636674/messages">Silahkan klik!</a>
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="formAuth">
                @csrf
                <div class="mb-3 inputForm passwordForm">
                    <div class="icon">
                        <label for="newPassword">
                            <img src="/img/iconLock.svg" alt="">
                        </label>
                    </div>
                    <div class="wrapperToggle">
                        <i class="bi bi-eye-fill" id="togglePassword"></i>
                    </div>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror email"
                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                        placeholder="Email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="actionUser d-flex justify-content-center flex-column align-items-center">
                    <button type="submit" class="btn btnPrimary" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">Submit</button>
                    <p class="text">Batal mengubah password ? <a href="{{ route('login') }}">masuk!</a>
                    </p>
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
