<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

         <!-- FONTE GOOGLE -->
<link href="https://fonts.googleapis.com/css2?family=Roboto" rel="stylesheet">

          <!-- FONTE BOOTSTRAP -->


        <!-- LINK CSS -->
        <link rel="stylesheet" href="/css/styles.css">


    </head>
    <body class="antialiased">

    <div class="navbar">

    @auth                        <!-- Se estiver logado aparecem esdses links-->
    <div class="navbar-left">
      <a href="/dashboard">Meus Eventos</a>
      <a href="/eventos">Eventos</a>
      <a href="/events/create">Criar Eventos</a>

      
       <form action="/logout" method="post">               <!-- Logout-->

        @csrf
        <a href="/logout" class="nav-link" onclick="event.preventDefault(); this.closest('form').submit();">SAIR</a>
       </form> 

    </div>
  @endauth
    @guest                        <!-- Se for visitante aparecem esdses links-->
    <div class="navbar-right">
      <a href="/login">Entrar</a>
      <a href="/register">Cadastrar</a>
    </div>
    @endguest

  </div>

  <main>
  <div class="container-fluid">
    <div class="row">
      @if(session('msg'))
      <p>{{session('msg')}}</p>
      @endif
      @yield('content')
    </div>
  </div>
</main>
    


    <footer>
        HDC EVENTS &COPY;
    </footer>

</body>
</html>
