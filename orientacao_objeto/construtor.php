<div class="titulo">Classe Construtor & Destrutor</div>
<?php
class Pessoa{
    public $nome;// assim é para ser passado obrigatoriamente o parametro
    public $idade;

    function __construct($novoNome, $idade){
        echo "Construtor invocado! <br>";
        $this->nome = $novoNome;
        $this->idade = $idade;
    }

    function __destruct(){
        echo 'Morreu';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}
$pessoa = new Pessoa('Rebecca', 24);
$pessoa->apresentar();
unset($pessoa);