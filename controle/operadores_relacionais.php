<div class="titulo">Operadores relacionais</div>
<?php

var_dump(1 === '1');
var_dump(1 !== '1');
echo '<br> Relacionais em if/else <br>';
$idade = 15;
if($idade > 18) {
    echo '<br> Pode dirigir';
}
else {
    echo '<br> Não pode dirigir';
}
echo '<br> Spaceship <br>';
var_dump(5 <=> 3);// quando o da esquerda é maior que o da direita, ele retorna 1, iguais é 0, direita maior -1
var_dump(5 <=> 5);
var_dump(3 <=> 5);
var_dump(!! 3);
var_dump(!!'');