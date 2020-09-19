<div class="titulo">Argumentos Padrão</div>
<?php
function saudacao($nome = 'Senhor(a)', $sobrenome = 'Cliente'){
    return "Bem vindo, $nome $sobrenome<br>";
}
echo saudacao();
echo saudacao(null);
echo saudacao(null, null);
echo saudacao('Mestre', 'Supremo');

function anotarPedido($comida, $bebida = 'água'){
    return "Para comer: $comida e beber: $bebida <br>";
}
echo anotarPedido('Hamburguer');
echo anotarPedido('Pizza', 'Chá gelado');
