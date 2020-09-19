<div class="titulo">Argumentos e Retorno</div>
<?php
function obterMensagem(){
    return 'Seja bem vindo<br>';
}
obterMensagem();
// não retornou nada, pq não tem o echo
echo obterMensagem(); // ou vc pode colocar a função em uma variavel
$mensagem = obterMensagem();
echo $mensagem;
var_dump(obterMensagem());
function obterMensagemNome($nome){
    return "Bem vindo {$nome}!<br>";
}
echo obterMensagemNome('Rebecca');

$variavel = 1;
function trocaValor($a, $novoValor){
    $a = $novoValor;
}
trocaValor($variavel, 4);
echo "$variavel <br>";

// & antes da variavel é para pegar a copia da variavel
function trocaValorVerdade(&$a, $novoValor){
    $a = $novoValor;
}
trocaValorVerdade($variavel, 5);
echo "$variavel <br>";