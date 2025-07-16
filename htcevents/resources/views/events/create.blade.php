@extends('layout.main')

@section('title','CREATE EVENT')

@section('content')


<h3>pasta events e visao create</h3>

 <h2>Formulário de Produto</h2>

  <form  action="/events" method="post" enctype="multipart/form-data">
    @csrf

    
    <div>
        <label for="image"> adicione a imagem do evento</label>
        <input type="file" name="image">

    </div>

    <label for="nome">Nome:</label>
    <input type="text" id="nome" name="name" >

    <label for="quantidade">Quantidade:</label>
    <input type="number" id="quantidade" name="qnt"  min="1">

    <label for="descricao">Descrição:</label>
    <textarea id="descricao" name="description" rows="4" ></textarea>
    
      <label for="descricao">Data do evento</label>
    <div class="form-group">
        <input type="date" name="date" value="date">
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

    <button type="submit">Enviar</button>
  </form>

@endsection