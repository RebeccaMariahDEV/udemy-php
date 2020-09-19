<div class="titulo">Sessão</div>
<?php
session_start(); //sempre usar quando iniciar uma sessão

print_r($_SESSION);
echo '<br>';

if(!$_SESSION['nome']){
    $_SESSION['nome'] = 'Renata';
}

if(!$_SESSION['email']){
    $_SESSION['email'] = 'rebecca@becca.com';
}
?>

<p>
    <a href="/sessao/basico_sessao_alterada.php">Alterar Sessão</a>
</p>