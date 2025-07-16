@extends('layout.main')

@section('title','EDIT EVENTO. $event->name')

@section('content')


<h3>pasta events e visao create</h3>

 <h2>Formulário de Produto</h2>

  <form  action="/events/update/{{$event->id}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="image"> adicione a imagem do evento</label>
        <input type="file" name="image">
        <img src="/img/events/{{$event->image}}" alt="" class="img-preview">

    </div>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="name" value="{{$event->name}}">

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="qnt"  min="1" value="{{$event->qnt}}">

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="description" rows="4" > {{$event->description}}</textarea>
    
      <label for="descricao">Data do evento</label>
    <div class="form-group">
            <input type="date" name="date" value="{{ \Carbon\Carbon::parse($event->date)->format('Y-m-d') }}">
      </div>

    <label for=""> Adicione os itens do Evento</label>
    <div class="form-group">
        <input type="checkbox" name="items[]" value="cadeiras">Cadeiras
    </div>
     <div class="form-group">
        <input type="checkbox" name="items[]" value="palco">palco
    </div>
     <div class="form-group">
        <input type="checkbox" name="items[]" value="cerveja gratis">Cerveja gratis
    </div>

    <button type="submit">actualizar</button>
  </form>

@endsection