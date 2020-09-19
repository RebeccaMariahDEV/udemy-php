<div class="titulo">Argumento variaveis</div>
<?php
function soma($a , $b){
    return $a + $b;
}
echo soma(12, 65) . '<br>';

function somacompleta(...$numeros){
    $soma = 0;
    foreach($numeros as $num){
        $soma += $num;
    }
    return $soma;
}
echo somacompleta(1, 6, 8, 9, 7);
$array = [2, 5, 7, 4, 78];
echo '<br>'. somacompleta(...$array);

function membros($titular, ...$dependentes){
    echo "Titular: $titular <br>";
    if($dependentes){
        foreach($dependentes as $dep){
            echo "Dependente: $dep <br>";
        }
    }
}
echo '<br>';
membros('Ana', 'Rafael', 'Marcelo');
