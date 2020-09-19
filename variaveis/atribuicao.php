<div class="titulo">Atribuições</div>

<?php
echo 'oi';
echo '<br>';
$valor = 10;
$valor -= 1.5;
echo $valor;
echo '<br>';
$valor--;
echo $valor;
echo '<br>';
$valor++; // decremento, operação unario
echo $valor;
echo '<br>';
echo $valor.=4; //concatenação <!DOCTYPE html>
$valorInexistente = 'valor inexistente';
echo '<br>', $valorInexistente;
$valor = $valorInexistente ?? 'valor default';
echo '<br>', $valorInexistente;