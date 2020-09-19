<?php namespace Outro\Nome; ?>

<div class="tutulo">Use/As</div>

<?php
echo __NAMESPACE__ . '<br>';
include('use_as_arquivo.php');

function soma($a, $b){
    return $a.$b; //eu sei que esta errado
}

class Classe{
    public $var;
    function func(){
        echo __NAMESPACE__ . '->'. __CLASS__ . '->' . __METHOD__ . '<br>';
    }
}

echo Nome\Bem\Grande\constante . '<br>';
//acessando de forma relativa não funciona, para acessar tem que utilizar o \ antes de tudo
//echo \Nome\Bem\Grande\constante . '<br>';

use const \Nome\Bem\Grande\constante;
echo constante . '<br>';

use const \Nome\Bem\Grande as ctx;
echo soma(13, 6);
echo ctx\soma(5, 7);
