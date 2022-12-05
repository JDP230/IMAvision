@extends('layouts.header1')

@section('content')
<span class="txt-header1">Fácil... Llene sus datos </span>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8 px-0">
            <div class="card card-theme2">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-2">
                            <label for="ocupacion" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Ocupacion') }}</label>

                            <div class="form-group col-md-6">
                                <!-- <input id="ocupacion" type="text" class="form-control @error('ocupacion') is-invalid @enderror" name="ocupacion" value="{{ old('ocupacion') }}" required autocomplete="ocupacion" autofocus>-->
                                <select name="ocupacion" id="ocupacion" class="form-control @error('ocupacion') is-invalid @enderror"  required autocomplete="ocupacion" autofocus>
                                    <option value="Estudiante">Estudiante</option>
                                    <option value="Egresado">Egresado</option>
                                    <option value="Docente">Docente</option>
                                </select>

                                @error('ocupacion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="carrera" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Carrera') }}</label>

                            <div class="form-group col-md-6">
                                <input id="carrera" type="text" class="form-control @error('carrera') is-invalid @enderror" name="carrera" value="{{ old('carrera') }}" required autocomplete="carrera" autofocus>

                                @error('carrera')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="name" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Nombre') }}</label>

                            <div class="form-group col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="apellido" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Apellido') }}</label>

                            <div class="form-group col-md-6">
                                <input id="apellido" type="text" class="form-control @error('apellido') is-invalid @enderror" name="apellido" value="{{ old('apellido') }}" required autocomplete="apellido" autofocus>

                                @error('apellido')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6 mb-2">
                                <label for="edad" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Edad') }}</label>
    
                                <div class="form-group col-md-6">
                                    <input id="edad" type="text" class="form-control @error('edad') is-invalid @enderror" name="edad" value="{{ old('edad') }}" maxlength="3" required autocomplete="edad" autofocus>
    
                                    @error('edad')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="col-6 mb-2">
                                <label for="sexo" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Sexo') }}</label>
    
                                <div class="form-group col-md-6">
                                    <!--<input id="sexo" type="text" class="form-control @error('sexo') is-invalid @enderror" name="sexo" value="{{ old('sexo') }}" required autocomplete="sexo" autofocus>-->
    
                                    <select name="sexo" id="sexo" class="form-control @error('sexo') is-invalid @enderror" required autocomplete="sexo" autofocus>
                                        <option value="Masculino">Masculino</option>
                                        <option value="Femenino">Femenino</option>
                                        <option value="Otro">Otro</option>
                                    </select>
                                    @error('sexo')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="telefono" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Número de telefono') }}</label>

                            <div class="form-group col-md-6">
                                <input id="telefono" type="text" class="form-control @error('telefono') is-invalid @enderror" name="telefono" value="{{ old('telefono') }}" maxlength="10" required autocomplete="telefono" autofocus>

                                @error('telefono')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="direccion" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Direccion') }}</label>

                            <div class="form-group col-md-6">
                                <input id="direccion" type="text" class="form-control @error('direccion') is-invalid @enderror" name="direccion" value="{{ old('direccion') }}" required autocomplete="direccion" autofocus>

                                @error('direccion')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="email" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Correo electónico') }}</label>

                            <div class="form-group col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Contraseña') }}</label>

                            <div class="form-group col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-2">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end pb-0">{{ __('Confirmar Contraseña') }}</label>

                            <div class="form-group col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        @include('layouts.footer1')
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
