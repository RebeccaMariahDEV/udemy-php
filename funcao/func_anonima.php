<div class="titulo">Funções Anônimas</div>
<?php
$soma = function($a, $b){
    return $a + $b;
};
// isso é uma função anonima, onde não tem o nome da função
echo $soma(4, 9);
echo '<br>';
function executar($a, $b, $op, $funcao){
    $resultado = $funcao($a, $b);
    echo "$a $op $b = $resultado<br>";
}
executar(2, 3, '+', $soma);
// isso é uma função mais confusa, é mais simples fazer elas mais claras
// porem essa função executar é mais flexivel
$multiplicacao = function($a, $b){
    return $a * $b;
};
executar(5, 9, '*', $multiplicacao);

function divisao($a, $b){
    return $a / $b;
}
executar(5, 9, '/', divisao);
//pode passar a função como um parametro para executar outra função, porem a função tem que haver um returno 
