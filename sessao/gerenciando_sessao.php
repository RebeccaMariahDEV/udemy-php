<div class="titulo">Gerenciando Sessão</div>
<?php
//session_id('id(qual vc tenha)') //porem tem que ser feito isso antes do star
session_start();
echo session_id();

$contador = &$_SESSION['contador'];
$contador = $contador ? $contador + 1 : 1;
echo '<br>'. $_SESSION['contador'];

if($_SESSION['contador'] % 5 === 0){
    session_regenerate_id();
}

if($_SESSION['contador'] >= 15){
    session_destroy();
}