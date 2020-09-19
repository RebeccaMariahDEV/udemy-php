<div class="titulo">Primeira Classe</div>
<?php
class  Cliente{
    // atributos
    public $nome = 'Anônimo';
    public $idade = 18;

    public function apresentar(){
        echo "Nome: {$this->nome} Idade: {$this->idade}<br>";
    }
}

$c1 = new Cliente();
$c1->apresentar();
$c2 = new Cliente;
$c2->nome = 'Roberto';
$c2->idade = 26;
$c2->apresentar();