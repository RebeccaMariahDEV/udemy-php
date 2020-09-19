<div class="titulo">Sessão Aterada</div>
<?php
session_start(); // ele permite usar a sessão em outras paginas
print_r($_SESSION);
?>

<?php
$_SESSION['email'] = 'renata@alterado.com';
?>
<p>
    <b>Nome:</b> <?= $_SESSION['nome'] ?> <br>
    <b>Email:</b> <?= $_SESSION['email'] ?>
</p>

<p>
    <a href="basico_sessao.php">Voltar a tela anterior</a>
</p>
<p>
    <a href="basico_sessao_limpar.php">Limpar Sessão</a>
</p>