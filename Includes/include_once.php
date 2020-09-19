<div class="titulo">Iclude Once</div>
<?php
ini_set('display_errors', 1);

include('include_once_arquivo.php');
//require('include_once_arquivo.php');

echo "Variavel = {$variavel}<br>";
$variavel = 'Estou alterada';
echo "Variavel = {$variavel}<br>";

include('include_once_arquivo.php'); //,não pode ser redeclarada a variavel chamando um arquivo novamente
//para fazer com que isso não de erros futuros tem que mudar a função no outro arquivi
echo $variavel . '<br>';
$variavel = 'Estou alterada';
echo "Variavel = {$variavel}<br>";

include_once('include_once_arquivo.php');
echo $variavel . '<br>';