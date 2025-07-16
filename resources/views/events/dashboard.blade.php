@extends('layout.main')

@section('title','dashboard')

@section('content')



<h1>dash</h1>

<hr>
Os meus eventos (criados por mim) <br><br>


@if(count($events) > 0)
<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome do evento</th>
            <th>Ações</th>
            <th>#</th>
        </tr>
    </thead>

    <tbody>
        @foreach($events as $events)
        <tr>
            <td>{{ $loop->index + 1 }}</td> 
            <td><a href="/events/{{ $events->id }}">{{ $events->name }}</a></td>
            <td>{{count($events->users)}}</td>
            <td>
                <a href="/events/edit/{{ $events->id }}" class="btn btn-info edit-btn" > <ion-icon name="create-outline"></ion-icon> Editar</a>
               
                <form action="/events/{{$events->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon>deletar</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@else
<p>vouce ainda nao tem eventos criados <a href="/events/create">criar eventos</a></p>
@endif




<hr>
<br><br>
Eventos que participo 


@if(!empty($eventsparticipant) && count($eventsparticipant) > 0)


<table>
    <thead>
        <tr>
            <th>#</th>
            <th>Nome do evento</th>
            <th>participantes</th>
            <th>acooes</th>
        </tr>
    </thead>

    <tbody>
        @foreach($eventsparticipant as $events)
        <tr>
            <td>{{ $loop->index + 1 }}</td> 
            <td><a href="/events/{{ $events->id }}">{{ $events->name }}</a></td>
            <td>{{count($events->users)}}</td>
            <td>
               
                <form action="/events/leave/{{$events->id}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger delete-btn"> <ion-icon name="trash-outline"></ion-icon>sair do evento</button>
                </form>

            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@else

@endif

@endsection
