
@extends('layouts.header_foro')
@section('content')
<form action="{{ url('/post/'.$post->id) }}" method="post">
@csrf
{{ method_field('PATCH') }}
@include('post.form',['modo'=>'Editar'])
</form>
@endsection