<?php 
session_start();
date_default_timezone_set('America/Sao_Paulo');
// index

if($_COOKIE['usuario']){
    $_SESSION['usuario'] = $_COOKIE['usuario'];
}

if(!$_SESSION['usuario']){
    header('Location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap" >
        <link rel="stylesheet" href="/css/estilo.css">
        <link rel="stylesheet" href="/css/exercicio.css">
    </head>
    <body>
        <header class="cabecalho">
            <h1>Curso php</h1>
            <h2>Índice dos Exercícios</h2>
        </header>
        <nav class="navegacao">
            <span class="usuario">Usuario: <?= $_SESSION['usuario'] ?></span>
            <a href="logout.php">Sair</a>
        </nav>
        <main class="principal">
            <div class="conteudo">
                <?php 
                    require_once('menu.php');
                ?>
            </div>
        </main>
        <footer class="rodape">
            COD3R & ALUNOS <?= date('d/m/Y');?>
        </footer>
    </body>
</html>