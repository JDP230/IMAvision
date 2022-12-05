@extends('layouts.fondo_color50')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-theme">
                <div class="card-body">
                    <div class="header-card">
                        <h1>Acerca de IMAvision!</h1>
                        <p class="txt-info mt-3">IMAvision es una herramienta ideal para todo interesado en la ingeniería, 
                            una perfecta guía de aprendizaje a una nueva experiencia académica y laboral. 
                            Únete completamente gratis o inicia sesión y empieza a forjarte como ingeniero a tu medida!</p>
                    </div>
                    <div class="row mt-3">
                        <span>Integrantes</span>
                        <span>PROYECT MANAGER: VALERIA PAOLA GONZALES DUEÑES</span>
                        <span></span>
                        <span>Juan Daniel Puente Melchor</span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span>ESTE PROTOTIPO ESTÁ</span>
                        <span>devsupport@imavision.com</span>




                    </div>



                    <div class="row mb-">
                        <div class="col-md-8 offset-md-4">
                            <a class="btn btn_base mt-2" href="{{ url('/login') }}">{{ __('REGRESAR') }}</a>
                        </div>
                    </div>
                </div>
            </div>
            <span class="derechos">Copyright IMAvision UANL 2022, Todos los derechos reservados.</span>
        </div>
    </div>
</div>
@endsection
