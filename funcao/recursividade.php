<div class="titulo">Recursividade</div>
<?php
function somaUmAte($num){
    $soma = 0;
    for(; $num >= 1; $num--){
        $soma += $num;
    }
    return $soma;
}
echo somaUmAte(5) . '<br>';
echo somaUmAte(10) . '<br>';
echo somaUmAte(76) . '<br>';

function somaRecursiva($num){
    //condição de parada!!!
    if($num === 1){
        return 1;
    }
    return $num + somaRecursiva($num - 1);
}
echo somaRecursiva(10). '<br>';

// não é uma forma muito legivel 
function somaRecursiva1($num){
    return $num === 1 ?  1 : $num + somaRecursiva1($num - 1);
}
echo somaRecursiva1(10). '<br>';