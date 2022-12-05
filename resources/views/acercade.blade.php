@extends('layouts.fondo_color50')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-theme">
                <div class="card-body">
                    <div class="header-card">
                        <h1>Acerca de IMAvision!</h1>
                        <p class="txt-info mt-3 inter-line13">IMAvision es una herramienta ideal para todo interesado en la ingeniería, 
                            una perfecta guía de aprendizaje a una nueva experiencia académica y laboral. 
                            Únete completamente gratis o inicia sesión y empieza a forjarte como ingeniero a tu medida!</p>
                    </div>
                    <div class="row mt-3">
                        <span class="txtN">Integrantes</span>
                        <span class="txt11 inter-line10">PROYECT MANAGER: VALERIA PAOLA GONZALES DUEÑES</span>
                        <span class="mt-2 txtN">Equipo de desarrollo</span>
                        <span class="txt11 inter-line10">Guillermo Adrián Alonso Arámbula </span>
                        <span class="txt11 inter-line10">Juan Daniel Puente Melchor</span>
                        <span class="txt11 inter-line10">Lilieth Irasema Minor Delgado</span>
                        <span class="txt11 inter-line10">Josias Salvador Lona Romero</span>
                        <span class="txt11 inter-line10">Patricio Humberto Gutierrez Salinas</span>
                        <span class="txt11 inter-line10">Elena Miroslava Lara Soto</span>

                        <span class="txt10 txt_orange inter-line10 mt-4">
                            ESTE PROTOTIPO ESTA EN FASE ALPHA, SE DEBE DE CONSIDERAR CAM BIOS PERTINENTES Y 
                            POSIBLES ERRORES O BUGS QUE INTERRUMPAN LA EXPERIENCIA DE USO, SI OBTIENE ESTE PROBLEMA 
                            CONTACTE AL SIGUIENTE CORREO CON SU PROBLEMA
                        </span>
                        <span class="txt_foro txt11 mt-2">devsupport@imavision.com</span>




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
