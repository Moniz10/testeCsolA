@extends('layout.main')

@section('title','HDC EVENTS WELCOME')

@section('content')

@if($id!=null)
<p>o id do produto e: {{$id}}</p>
@else
<p>buscou: {{$busca}}</p>
@endif

@endsection