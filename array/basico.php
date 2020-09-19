<div class="titulo">Array</div>
<?php
$lista = array(1, 2, 3.4, "texto");
echo $lista .'<br>';
var_dump($lista);
print_r($lista);
echo '<br>'. $lista[0];
echo '<br>'. $lista[1];
echo '<br>'. $lista[2];
echo '<br>'. $lista[3];
echo '<br>';
var_dump($lista[8]);//null

$texto = 'Esse é um teste';
echo mb_substr($texto, 10, 1); // para pegar do texto o valor 10 e apenas ele, sem levar os caracteres como outros
