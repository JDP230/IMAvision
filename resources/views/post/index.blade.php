@extends('layouts.app')
@section('content')

<div class="container">

@if(Session::has('mensaje'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    <strong>{{ Session::get('mensaje') }}</strong>
</div>
@endif
<a href="{{ url('/post/create') }}">Crear post</a>

    @foreach ($posts as $post)
    <div class="row card-post">
        <div class="col">
            <div class="row">
                Img usuario
            </div>
            <div class="row botos">
                <span>{{ $post->Acuerdo }}</span>
                <span>{{ $post->Desacuerdo }}</span>

            </div>
        </div>
        <div class="col">
            <div class="row">
                <div class="col">
                    <span class="txt_primary">Ocupacion</span>
                    <span class="txt_secundary">Nombre</span>
                </div>
                <div class="col">
                    <span class="txt_secundary">Fecha</span>
                </div>
            </div>
            <div class="row">
                <span class="txt_primary">{{ $post->Contenido }}</span>
            </div>
            <div class="row btn_cont_post">
                <span> Responder </span>
                <span> En acuerdo </span>
                <span> En desacuerdo </span>
            </div>
            <div class="row btn_cont_post_options">
                <a href="{{ url('/post/'.$post->id.'/edit') }}">Editar</a>

                <form action="{{ url('/post/'.$post->id) }}" method="post">
                @csrf
                {{ method_field('DELETE') }}
                    <input type="submit" onclick="return confirm('Borrar post')" value="Borrar">
                </form>
            </div>
        </div>
   </div>
   <br><br>
   @endforeach
</div>
@endsection
