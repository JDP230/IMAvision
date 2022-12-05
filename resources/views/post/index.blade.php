@extends('layouts.header_foro')
@section('content')
<div id="buscador_foro">
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                    <!-- Authentication Links -->
                    @guest
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                    {{ __('Cerrar Sesión') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <a class="nav-link" href="{{ url('/post/create') }}"  role="button">Crear post</a>
                            </div>
                        </li>
                    @endguest
                </ul>
            </div>
            <input type="text" class="col form-control">
        </div>
    </nav>
</div>

<div class="container">
@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ Session::get('mensaje') }}</strong>
</div>
@endif
    @foreach ($posts as $post)
    <div class="row cont-foro justify-content-around mb-4">
        <div class="col-1">
            <div class="row">
                Img usuario
            </div>
            <div class="row botos">
                <span>{{ $post->Acuerdo }}</span>
                <span>{{ $post->Desacuerdo }}</span>

            </div>
        </div>
        <div class="col-9">
            <div class="row">
                <div class="col">
                    <div class="rox">
                        <span class="txt_primary txt_foro">{{ $post->users->ocupacion }}</span>
                    </div>
                    <div class="row">
                        <span class="txt_secundary">{{ $post->users->name }}</span>
                    </div>
                </div>
                <div class="col">
                    <span class="txt_secundary txt_foro txt10">{{ $post->created_at }}</span>
                </div>
            </div>
            <div class="row">
                <span class="txt_foro">{{ $post->Contenido }}</span>
            </div>
            <div class="row btn_cont_post">
                <div class="col-4">
                    <span class="txt12"> Responder </span>
                </div>
                <div class="col-4 p-0">
                    <span class="txt12"> En acuerdo </span>
                </div>
                <div class="col-4 p-0">
                    <span class="txt12"> En desacuerdo </span>
                </div>
            </div>
            @if((Auth::user()->id) == $post->user_id)
            <div class="row btn_cont_post_options mt-4">
                <div class="col-6">
                    <a class="btn btn_base txt11 py-1 px-2" href="{{ url('/post/'.$post->id.'/edit') }}">Editar</a>
                </div>
                <div class="col-6">
                    <form action="{{ url('/post/'.$post->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                        <input class="btn btn_base btn_secundary txt11 py-1 px-2" type="submit" onclick="return confirm('¿Quieres borrar el post?')" value="Borrar">
                    </form>
                </div>
            </div>
            @endif
        </div>


   </div>
   @endforeach
   {!! $posts->links() !!}
</div>
@endsection
