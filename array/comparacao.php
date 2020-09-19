<div class="titulo">Comparação Arrays</div>
<?php
$array1 = ['nome'=> 'mariah', 'idade'=> 23];
$array2 = ['nome'=> 'mariah', 'idade'=> 23];
var_dump($array1 === $array2);
echo '<br>';
$array3 = ['idade'=> 23, 'nome'=> 'mariah'];
var_dump($array3 == $array2);
echo '<br>';
var_dump($array1 !== $array3);
