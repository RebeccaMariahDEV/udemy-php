<div class="titulo">Map & Filter</div>
<?php
$notas = [ 5.7, 4.8, 7.0, 6.9];
$notasFinais = [];
foreach($notas as $nota){
    $notasFinais[] = round($nota);
}
print_r($notasFinais);
echo '<br>';
$notasFinais1 = array_map(round, $notas);
print_r($notasFinais1);

$apenasAprovados = [];

foreach($notas as $nota){
    if($nota >= 7){
        $apenasAprovados[] = $nota;
    }
   
}
echo '<br>';
print_r($apenasAprovados);

function aprovado($nota){
    return $nota >= 7;
}
echo '<br>';
$apenasAprovados = array_filter($notas, aprovado);
function calculo($nota){
    $notaFinal = round($nota) + 1;
    return $notaFinal > 10 ? 10 : $notaFinal;
}
echo '<br>';
$notasFinais1 = array_map(calculo, $notas);
print_r($notasFinais1);