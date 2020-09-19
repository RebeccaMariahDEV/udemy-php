<div class="titulo">Erros personalizados</div>
<?php
class FaixaEtariaException extends Exception {
    public function __construct($menssagem, $code = 0, $previous = null){
        echo "erro personalizado: $menssagem<br>";
        parent::__construct($menssagem, $code, $previous);
    }
}

function aprosentadoria($idade){
    if($idade < 18){
        throw new FaixaEtariaException('Tu ainda é muito jovem');
    }
    if($idade > 70){
        throw new FaixaEtariaException('Tu deveria estar aposentado já');
    }
    return 70 - $idade;
}

$idadesAvaliadas = [15, 34, 25, 67, 42, 82];
foreach($idadesAvaliadas as $idade){
    try {
        $tempoRestante = aprosentadoria($idade);
        echo "Idade: $idade, $tempoRestante anos restantes<br>";
    } catch(FaixaEtariaException $e) {
        echo "não foi possivel calcular para $idade anos.<br>";
        echo "Motivo: {$e->getMessage()}<br>";
    }
}