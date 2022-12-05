@extends('layouts.fondo_color50')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-theme">
                <div class="card-body">
                    <div class="header-card">
                        <h1>Bienvenido a IMAvision!</h1>
                        <p class="txt-info mt-3">IMAvision es una herramienta ideal para todo interesado en la ingeniería, 
                            una perfecta guía de aprendizaje a una nueva experiencia académica y laboral. 
                            Únete completamente gratis o inicia sesión y empieza a forjarte como ingeniero a tu medida!</p>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <label for="email" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Correo electrónico') }}</label>

                            <div class="form-group col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row pb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Contraseña') }}</label>

                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-">
                            @if (Route::has('password.request'))
                                <span>Olvidaste tu contraseña? Clic aqui en </span>
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Recuperar Cuenta') }}
                                </a>
                            @endif
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn_base">
                                    {{ __('INICIAR SESIÓN') }}
                                </button>
                                @if (Route::has('register'))
                                <a class="btn btn_base mt-2" href="{{ route('register') }}">{{ __('REGISTRARSE') }}</a>
                                @endif

                                <a class="btn btn_base mt-2" href="{{ url('/acercade') }}">{{ __('ACERCA DE') }}</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <span class="derechos">Copyright IMAvision UANL 2022, Todos los derechos reservados.</span>
        </div>
    </div>
</div>
@endsection
