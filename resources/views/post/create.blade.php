@extends('layouts.app')
@section('content')
<form action="{{ url('/post') }}" method="post">
@csrf
@include('post.form',['modo'=>'Crear'])

</form>
@endsection