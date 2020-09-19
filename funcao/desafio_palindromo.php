<div class="titulo">Desafio Palindromo</div>
<?php
function palindromo($palavra){
    $ultimo = strlen($palavra) - 1;
    for($i = 0; $i <= $ultimo; $i++){
        if($palavra[$i] !== $palavra[$ultimo - $i]){
            return 'Não';
        }
    }
    return 'Sim';
}
echo palindromo('arara') . '<br>';
echo palindromo('ana') . '<br>';
echo palindromo('bola') . '<br>';
echo palindromo('gato') . '<br>';
echo palindromo('abccba') . '<br>';
echo '<hr>';
function palindromoSimples($palavra){
    return $palavra === strrev($palavra) ? 'Sim': "não";
}
echo palindromoSimples('bola') . '<br>';
echo palindromoSimples('arara') . '<br>';
echo palindromoSimples('bob') . '<br>';
echo palindromoSimples('abccba') . '<br>';
echo palindromoSimples('gato') . '<br>';