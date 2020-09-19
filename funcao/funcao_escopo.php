<div class="titulo">Funções e Escopo</div>
<?php
function imprimirMensagem(){
    echo 'Oi<br>';
    echo 'Até mais<br>';
}

imprimirMensagem();
imprimirMensagem();
imprimirMensagem();

$variavel = 1;
function trocarValor(){
    $variavel = 2;
    echo "Durante a função: $variavel <br>";
}
echo "Antes: $variavel<br>";
trocarValor();
echo "Depois: $variavel<br>";

function trocaValorV(){
    global $variavel;
    $variavel = 3;
    echo "Valor agora: $variavel <br>";
}
echo "Antes: $variavel<br>";
trocaValorV();
echo "Depois: $variavel<br>";

var_dump(trocaValorV());