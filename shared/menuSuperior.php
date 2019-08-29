<?php
  session_start();
  if (! isset($_SESSION['login'])) {
    $erro = "Usuário não logado";
    include_once "login.php";
    exit(0);
  }
  include_once "funcao.php";
?>
<head>
    <title>Cão Em Equilibrio</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
    <nav class="navbar navbar-expand-lg navbar-dark  bg-dark" style="margin-bottom: 1rem">
    <a class="navbar-brand" href="Principal.php">Cão em Equilibrio</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#"> <span class="sr-only">(página atual)</span></a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="petIndex.php">Cães</a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="tipoUsuarioIndex.php">Tipos de Usuários</a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="usuarioIndex.php">Usuários</a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="tutorIndex.php">Tutores</a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="hospedagemIndex.php">Registrar Hospedagem</a>
            </li>
            <li class="nav-item">
                     <a class="nav-link" href="crecheIndex.php">Creche</a>
            </li>


        </ul>
        <form class="form-inline my-2 my-lg-0">
           
            <a class="btn btn-outline-success my-2 my-sm-0" href="logout.php">Logout</a>
        </form>
    </div>
</nav>
</head>


