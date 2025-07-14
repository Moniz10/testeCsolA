@extends('layout.main')

@section('title','HDC EVENTS WELCOME')

@section('content')
    <h1>ola laravel</h1>
     
    <img src="/img/puublicosaud.jpg" alt="">
    

    <h1>Busque um evento</h1>
    <form action="/" method="get">
        <input type="text" name="search" placeholder="SEARCH">
    </form>

    @if($search)
    <h3>RESULTADOS DOS EVENTOS:: {{$search}}</h3>
    @else
    <h3>LISTAR TODOS OS EVENTOS</h3>
    @endif

    @foreach($events as $event)

    <p>Nome do evento : {{$event->name}}  ---  descricao: {{$event->description}} --- imagem :: <img src="/img/events/{{$event->image}}" alt=""></p>
    <a href="/events/{{$event->id}}"> SABER MAIS</a>    

    @endforeach


<!--fazer verificacao caso nao haja eventos nem pesquisa
-->

    @if(count($events)==0 && $search )
    <p>SEM NAO HA EVBENTOS COM NOME {{$search}}  <a href="/">voltar</a>  </p>
    @elseif(count($events)==0)
    <p>nao ha eventos disponiveis</p>
    @endif





@endsection