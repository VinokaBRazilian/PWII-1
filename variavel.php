<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página inicial do site</title>
    <link href="bootstrap.min.css" rel="stylesheet" />
    <style>
        div{
            /* border:1px solid; */
            /* margin:1px; */
        }
        </style>
</head>
<body>
<nav class="navbar bg-dark navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Aula PW 2</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">
                Página Inicial
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="variavel.php">
                Variavel
            </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="while.php">While</a></li>
            <li><a class="dropdown-item" href="for.php">For</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="foreach.php">Foreach</a></li>
          </ul>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="bootstrap.php">
                Bootstrap
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link">
                Disabled
            </a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
   

<div class="container">   
    <h1>Variáveis em PHP</h1>
    <p> $numero = 10; //Aqui é uma variavel inteira </p>
    <p> $string = "Fernando camisa 10"; </p>
    <p> $string1 = "Fernando camisa ".$numero; </p>
    <p> $string2 = "Fernando camisa $numero"; </p>
    <p> $valorDecimal = 10.50; </p>
    <p> $Ativo = true; </p>
    <p> /*  Aqui é um bloco de comentario */ </p>
    <?php //Tudo que está entre as tags do php não parece na tela ?>
    
    <?php //a não ser que usemos a função echo com string ?>
        <?php
            echo "Hello World";
            echo "<br>";
            $numero = 10;
            $nome = "Fernando";
            $frase1 = "<p> $nome camisa $numero frase com paragrafo </p>";
            $frase2 = $nome."  camisa ".$numero;// cocatenação das antigas
            echo $frase1;
            echo "$frase2 É o que tem dentro da variavel";


        ?>

</div>
    <script src="bootstrap.bundle.min.js"></script>
</body>
</html>