<div class="titulo">Escrever Arquivo</div>
<?php
$arquivo = fopen('teste.txt', 'w');
fwrite($arquivo, 'Valor inicial\n');
$str = 'Segunda linha';
fwrite($arquivo, $str);
fclose($arquivo);
$arquivo = fopen('teste.txt', 'a');
fwrite($arquivo, 'mais um valor adicionado\n');
ini_set('display_errors', 1);
$arquivo = fopen('teste.txt', 'x'); //vai dar erro pq já existe
$arquivo = fopen('teste2.txt', 'x');
