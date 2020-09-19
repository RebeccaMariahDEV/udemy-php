<div class="titulo">Operador Ternario</div>
<?php
$idade = 70;
$status =  '';
if($idade >= 18){
    $status = 'Maior de idade';
} else {
    $status = 'Menor de idade';
}
echo "$status<br>";
$idade = 12;
$status = $idade >= 18 ? 'Maior de idade' : 'Menor de idade'; // if e else na mesma linha, o famoso ifternario
echo "$status<br>";
$status = $idade >= 18 ? ($idade >= 65 ? 'Aposentado' : 'maior de idades') : 'menor de idade';//um dentro do outro em uma unica linha
$aposentado = $idade >= 65 ? 'Aposentado' : 'Maior de idade';
$status = $idade >= $aposentado ? 'Maior de idade' : 'Menor de idade';