<?php
session_start();

$email = $_POST['email'];
$senha = $_POST['senha'];

if($_POST['email']){
    $usuarios = [
            [
                    'nome' => 'aluno',
                    'email' => 'aluno@aluno.com',
                    'senha' => '1234',

            ],
        [
                'nome'=> 'outro aluno',
                'email'=> 'outro_aluno@aluno.com',
                'senha'=> '5678',
        ]
    ];
    foreach ($usuarios as $usuario){
        $emailValido = $email === $usuario['email'];
        $senhaValida = $senha === $usuario['senha'];

        if ($emailValido && $senhaValida){
            $_SESSION['erros'] = null;
            $_SESSION['usuario'] = $usuario['nome'];
            $exp = time( ) + 60 * 60 *24 * 30 ;
            setcookie('usuario', $usuario['nome'], $exp);
            header('Location: index.php');
        }
    }

    if (!$_SESSION['usuario']){
        $_SESSION['erros'] = ['Usuario/senha invalido'];
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@469&display=swap">
    <link rel="stylesheet" href="/css/estilo.css">
    <link rel="stylesheet" href="/css/login.css">
    <link rel="stylesheet" href="/css/exercicio.css">
</head>
<body class="login">
<header class="cabecalho">
    <h1>Curso php</h1>
    <h2>Seja Bem Vindo</h2>
</header>
<main class="principal">
    <div class="conteudo">
        <h3>Indentifique-se</h3>
        <?php if ($_SESSION['erros']) : ?>
            <div class="erros">
                <?php foreach ($_SESSION['erros'] as $erro): ?>
                    <p><?= $erro; ?></p>
                <?php endforeach ?>
            </div>
        <?php endif ?>
        <form action="#" method="post">
            <div>
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email">
            </div>
            <div>
                <label for="senha">Senha</label>
                <input type="password" name="senha" id="senha">
            </div>
            <button>Entrar</button>
        </form>
    </div>
</main>
<footer class="rodape">
    COD3R & ALUNOS <?= date('Y'); ?>
</footer>
</body>
</html>