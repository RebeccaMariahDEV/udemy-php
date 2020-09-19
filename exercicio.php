<?php
session_start();

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>
<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" >
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="/css/exercicio.css">
        <title>Exercício</title>
    </head>
    <body class="exercicio">
        <header class="cabecalho">
            <h1>Curso php</h1>
            <h2>Visualização do Exercício</h2>
        </header>
        <nav class="navegacao">
            <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
            <a href="" class="verde">Sem formatação</a>
            <a href="index.php" class="vermelho">Voltar</a>
            <a href="logout.php">Sair</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
             <?php
               // include($_GET['dir'] . "/" . $_GET['file'] . ".php")
              //include("/{$_GET['dir']}/{$_GET['file']}.php");
             // include("teste/teste.php")
                include("{$_GET['dir']}/{$_GET['file']}.php");
               // include('basico/ola.php');
               // include('basico/html.php');
             ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS <?= date('Y');?>
        </footer>
    </body>

</html>