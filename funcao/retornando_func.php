<div class="titulo">Retornando Função</div>
<?php
function soma($a){
    // algoritimo (30s)
    return function($b) use($a){
        return $a + $b; // 3s
    };
}
echo soma(3)(3);

$doiMais = soma(2);
echo '<br>' . $doiMais(10);
echo '<br>' . $doiMais(18);