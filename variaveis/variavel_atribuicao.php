<div class="titulo">Referencia vs Atribuição</div>
<?php
$variavel = 'valor inicial';
echo $variavel;
// Atribuição por valor
$variavelValor = $variavel;
echo "<br> $variavelValor";
$variavelValor = 'novo valor';
echo "<br> $variavel";
echo "<br> $variavelValor";
//Atribuição por referencia
$variavelReferencia =&$variavel;
$variavelReferencia = 'mesma referencia';
echo "<br>$variavel $variavelReferencia";