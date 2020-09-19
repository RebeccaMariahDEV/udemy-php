<div class="titulo">Declarando Tipos</div>
<?php
function soma($a, $b){
    return $a + $b  .'<br>';
}
echo soma(9, 5);
echo soma(1.8, 3.5);

function soma2(int $a, int $b){
    return $a + $b . '<br>';
}
echo soma2(9, 5);
echo soma2(1.8, 3.5);

function soma3($a, $b): int{
    return $a + $b . '<br>';
}
echo soma3(9, 5);
echo'<br>';
echo soma3(1.8, 3.5);