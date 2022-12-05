<h1>{{ $modo }} post</h1>

@if(count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach( $errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
        </ul>
    </div>

@endif


<div class="form-group">
    <label for="Contenido">Ok, menciona tu duda o pregunta...</label>
    <textarea class="form-control" name="Contenido" id="Contenido" rows="3" placeholder="Contenido del post...">{{ isset($post->Contenido)?$post->Contenido:old('Contenido') }}</textarea>
    
    <input type="hidden" name="Acuerdo" id="Acuerdo" value="{{ isset($post->Acuerdo)?$post->Acuerdo:'0' }}">
    <input type="hidden" name="Desacuerdo" id="Desacuerdo" value="{{ isset($post->Desacuerdo)?$post->Desacuerdo:'0' }}">
</div>


<input type="submit" value="{{ $modo }} post">

<a href="{{ url('/post/') }}">Regresar</a>