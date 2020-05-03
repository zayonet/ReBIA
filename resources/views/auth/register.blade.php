<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ReBIA') }}</title>


    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body class="register-page">
    <div class="container">
        <div class="row justify-content-center">
            <div class="register-box">
                <div class="register-logo">
                    <a href="/"><b>Re</b>BIA</a>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">ReBIA</h3>

                        <div class="card-tools">
                            <a type="button" class="btn btn-tool" href="/"><i class="fas fa-times"></i>
                            </a>
                        </div>
                    </div>
                    <div class="card-body register-card-body">
                        <p class="login-box-msg">Fazendo parte da familia ReBIA</p>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="input-group mb-3">
                                <input  id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Seu nome">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Seu e-mail">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                    </div>
                                </div>
                                
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                                <input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Palavra-passe">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                                
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="input-group mb-3">
                            <input  id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Redigite a palavra-passe">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                                </div>
                            </div>
                            </div>
                            <div class="row">
                            <div class="col-8">
                                <div class="icheck-primary">
                                <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                                <label for="agreeTerms">
                                    Eu concordo com os <a href="#"> termos </a>
                                </label>
                                </div>
                            </div>
                            <!-- /.col -->
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-sm">{{ __('Registar') }}</button>
                            </div>
                            <!-- /.col -->
                            </div>
                        </form>

                        <!-- Social register -->
                        <div class="text-center mt-3">
                        {{--    <p> ou registra-se com: </p>

                                <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f text-blued"></i></a>
                                <a href="#" class="mx-2" role="button"><i class="fab fa-google-plus-g"></i></a>
                                <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in text-blued"></i></a>
                                <a href="#" class="mx-2" role="button"><i class="fab fa-github text-blued"></i></a>--}}
                            <small><p><a href="/login" class="text-center">Eu já tenho um meu cadastro</a></p></small>
                        </div> 


                        <hr>

                        <!-- Terms of service -->
                        <small>
                            <p> 
                                Ao clicar em <em> Registar </em> você concorda com a nossa <a href="" target="_blank"> termos de serviço </a>
                             </p>
                        </small>
                    </div>
                    <!-- /.form-box -->
                </div><!-- /.card -->
            </div>
            <!-- /.register-box -->
        </div>
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- 
    <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script> --}}
</body>
</html>