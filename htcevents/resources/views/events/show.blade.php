@extends('layout.main')

@section('title','CREATE EVENT')

@section('content')

<h1>SABER MAIS DO EVENTO: </h1>
<P>nOME DO eVENTO: <b>{{$events->name}}</b> E qUALNTIDADAE: <b>{{$events->qnt}}</b> </P>
<P></P>
<P> <img src="/img/events/{{$events->image}}" alt=""> </P>
<h3>DESCRICAO:: {{$events->description}}</h3>

<h2>O EVENTO CONTA COM</h2>
<Ul>
    @foreach($events->items as $item)
    <li>{{$item}}</li>
    @endforeach
</Ul>

<p class="card-date"> DATA DO EVENTO:: {{ date('d/m/y'),strtotime($events->date)}}</p>

<h3>DONO DO EVENTO:: {{$eventowner['name']}}<B></B></h3>

<!--  link fica dentro de form assim parece um link mas no fundoe um form no onclick -->
  <!--  -->

@if(! $hasuserjoined)
<form action="/events/join/{{$events->id}}" method="post">
    @csrf
<a href="/events/join/{{$events->id}}" style="color: orange;" class="btn btn-primary" onclick="event.preventDefault();this.closest('form').submit();">Participar</a>
</form>
@else
<p class="already">voce ja participa desse evento</p>
@endif

<p class="events-participants"><ion-icon name="people-outline"></ion-icon>{{count($events->users)}} Participantes</p>

@endsection