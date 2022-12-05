<h1>{{ $modo }} post</h1>
<label for="Contenido">Ok, menciona tu duda o pregunta...</label>
<textarea name="Contenido" id="Contenido" rows="3">{{ isset($post->Contenido)?$post->Contenido:'' }}</textarea>

<input type="hidden" name="Acuerdo" id="Acuerdo" value="{{ isset($post->Acuerdo)?$post->Acuerdo:'0' }}">
<input type="hidden" name="Desacuerdo" id="Desacuerdo" value="{{ isset($post->Desacuerdo)?$post->ConteDesacuerdonido:'0' }}">


<input type="submit" value="{{ $modo }} post">

<a href="{{ url('/post/') }}">Regresar</a>