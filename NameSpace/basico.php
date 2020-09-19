<?php namespace Contexto; ?>
<div class="titulo">Exemplo básico</div>
<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;
define('Contexto\constante2', 234);
define(__NAMESPACE__ . '\constante3', 345);
define('outro_contexto\constante4', 456);
echo constante . '<br>';
echo constante2 . '<br>';
echo constante3 . '<br>';
echo constante4 . '<br>';
//consegue acessar usando / ou não o namespace direto
echo constant(__NAMESPACE__ . '\constante3', 345);
echo'<br>';
echo \outro_contexto\constante4 . '<br>';
