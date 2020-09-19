<div class="titulo">Closure & Callable</div>
<?php
$soma1 = function ($a, $b){
    return $a + $b;
};

// essa função não esta na classe closure/ classe fechada
function soma2($a, $b){
    return $a + $b;
}

echo $soma1(6, 4);
echo '<br>';
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>'; // callable é chamada
//$soma1 = 6;
echo (is_callable($soma1) ? 'sim' : 'não') . '<br>';// não é pois recebeu um valor inteiro
echo soma2(6, 3);
echo '<br>';
echo (is_callable(soma2) ? 'sim' : 'não') . '<br>'; // função tbm é um callable

var_dump($soma1);
echo '<br>';
function executar($a, $b, $op, callable $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
executar (2, 3, '+', $soma1);
executar (2, 3, '+', soma2);
echo '<br>';
function executar1($a, $b, $op, closure $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
executar1 (2, 3, '+', $soma1);
executar1 (2, 3, '+', soma2);
