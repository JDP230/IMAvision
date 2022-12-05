
<div class="container">
    <div class="form-post">
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
            <label class="txt18" for="Contenido">{{ $modo }} tu duda o pregunta...</label>
            <textarea class="form-control mt-3" name="Contenido" id="Contenido" rows="8" placeholder="Contenido del post...">{{ isset($post->Contenido)?$post->Contenido:old('Contenido') }}</textarea>
            
            <input type="hidden" name="Acuerdo" id="Acuerdo" value="{{ isset($post->Acuerdo)?$post->Acuerdo:'0' }}">
            <input type="hidden" name="Desacuerdo" id="Desacuerdo" value="{{ isset($post->Desacuerdo)?$post->Desacuerdo:'0' }}">
            <input type="hidden" name="user_id" id="user_id" value="{{ isset(Auth::user()->id)?Auth::user()->id:'0' }}">
    
        </div>
    
        <div class="footer1 px-0">
            <div class="row mb-0">
                <div class="col-12 px-5 mt-2">
                    <input class="btn btn_base" type="submit" value="{{ $modo }}">
                </div>
                <div class="col-12 px-5 mt-2 center">
                    <a class="btn btn_base btn_secundary" href="{{ url('/post/') }}">
                        REGRESAR
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

