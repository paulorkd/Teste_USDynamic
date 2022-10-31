<!DOCTYPE html>
<html lang="pt-br">
<head>
  <!-- Meta tags Obrigatórias -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <title>Produto</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">USDYNAMIC</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Alterna navegação">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/produto">Home <span class="sr-only">(Página atual)</span></a>
        <a class="nav-item nav-link" href="/produto">Produto</a>
        @if(Auth::user()->tipo == 'Administrador')
        <a class="nav-item nav-link" href="/usuario">Usuario</a>
        @endif
        
      </div>
    </div>
    <a class="nav-link disabled" href="#">Usuario: {{Auth::user()->name}} | Nivel: {{Auth::user()->tipo}}</a>
		<a class="btn btn-outline-danger" href='/login/sair'>Sair</a>
  </nav>

