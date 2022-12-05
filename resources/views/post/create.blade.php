<form action="{{ url('/post') }}" method="post">
@csrf
@include('post.form',['modo'=>'Crear']);

</form>