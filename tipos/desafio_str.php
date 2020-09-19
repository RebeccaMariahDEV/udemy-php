<div class="titulo">Desafio de String</div>
<?php

echo 'Enunciado:', '<br>';
//print ' Avaliando os metodos da documentação da string, qual o metodo',
//' que a posição do texto "abc" na string "!AbcaBcabc" retorne 1? ';
echo strpos('!AbcaBcabc', 'abc'). '<br>';
echo stripos('!AbcaBcabc', 'abc'). '<br>';// aq retorna 1 pq ele desconsidera as letras maiusculas
echo strpos(strtolower('!AbcaBcabc'), 'ABC'). '<br>';

