<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Título da Página</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>


  <nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Clube de Socios</a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarConteudo" aria-controls="navbarConteudo" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarConteudo">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Início</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contato</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
          <button class="btn btn-outline-light" type="submit">Buscar</button>
        </form>
      </div>
    </div>
  </nav>

@yield('content')





<!-- FOOTER -->

<footer class="bg-dark text-white pt-5 pb-4">
  <div class="container text-md-left">
    <div class="row text-md-left">

      <!-- Coluna 1 -->
      <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Minha Plataforma</h5>
        <p> Torne-se um sócio do <strong>melhor clube de Moçambique</strong> e viva experiências únicas dentro e fora dos campos.  
    Junte-se à família <strong>Costa do Sol</strong> e aproveite todos os benefícios exclusivos que só os verdadeiros campeões têm acesso!</p>
      </div>

      <!-- Coluna 2 -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Links úteis</h5>
        <p><a href="/events/home" class="text-white" style="text-decoration: none;">Home</a></p>
        <p><a href="/events/create" class="text-white" style="text-decoration: none;">Criar Eventos</a></p>
        <p><a href="/" class="text-white" style="text-decoration: none;">Sobre nós</a></p>
      </div>

      <!-- Coluna 3 -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Siga-nos</h5>
        <a href="#" class="text-white me-4"><i class="bi bi-facebook"></i> Facebook</a><br>
        <a href="#" class="text-white me-4"><i class="bi bi-instagram"></i> Instagram</a><br>
        <a href="#" class="text-white me-4"><i class="bi bi-twitter"></i> Twitter</a><br>
        <a href="#" class="text-white"><i class="bi bi-envelope"></i> Email</a>
      </div>

      <!-- Coluna 4 -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
        <h5 class="text-uppercase mb-4 font-weight-bold text-warning">Contacto</h5>
        <p><i class="bi bi-house-door"></i> Cidade, País</p>
        <p><i class="bi bi-envelope"></i> exemplo@email.com</p>
        <p><i class="bi bi-telephone"></i> +258 84 000 0000</p>
      </div>

    </div>

    <hr class="mb-4">

    <!-- Direitos autorais -->
    <div class="row align-items-center">
      <div class="col-md-7 col-lg-8">
        <p>© 2025 Todos os direitos reservados por:
          <a href="#" style="text-decoration: none;">
            <strong class="text-warning"> EVENTO++</strong>
          </a>
        </p>
      </div>

      <div class="col-md-5 col-lg-4">
        <!-- Ícones das redes sociais -->
        <div class="text-center text-md-right">
          <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-facebook"></i></a>
          <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-instagram"></i></a>
          <a href="#" class="btn btn-outline-light btn-floating m-1"><i class="bi bi-twitter"></i></a>
        </div>
      </div>
    </div>

  </div>
</footer>

<!-- /FOOTER -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
</body>
</html>
