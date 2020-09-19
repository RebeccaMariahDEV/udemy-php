<div class="titulo">Desafio Sorteio</div>
<?php
$nomes = ['Elza', 'Branca', 'Mulan', 'Rapunzel', 'Cinderela'];
$aleatorio = array_rand($nomes);
echo "<h1><center>$nomes[$aleatorio]</center></h1>";
