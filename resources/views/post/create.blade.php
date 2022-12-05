@extends('layouts.header_foro')
@section('content')
<form action="{{ url('/post') }}" method="post">
@csrf
@include('post.form',['modo'=>'Publicar'])

</form>
@endsection