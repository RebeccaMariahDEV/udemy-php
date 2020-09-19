<div class="titulo">Herança</div>
<?php
class Pessoa{
    public $idade;
    public $nome;

    function __construct($nome, $idade){
        $this->nome = $nome;
        $this->idade = $idade;
        echo "Pessoa criada<br>";
    }

    function __destruct(){
        echo 'Tchau<br>';
    }

    public function apresentar(){
        echo "{$this->nome}, {$this->idade} anos <br>";
    }
}

class Usuario extends Pessoa{
    public $login;

    function __construct($nome, $idade, $login) {
        $this->nome = $nome;
        $this->idade = $idade;
        $this->login = $login;
        echo 'usuario criado <br>';
    }

    function __destruct(){
        echo 'Usuario deslogado<br>';
        parent::__destruct();
    }

    public function apresentar(){// sobrescrever o comportamento da função ou assim -> 
        //echo "@{$this->login}:";
        // ou parent::apresentar();
        echo "@{$this->login}: {$this->nome}, {$this->idade} anos<br>";
    }
}

$usuario = new Usuario('Rebecca Mariah', 24, 'becca_mariah');
$usuario->apresentar();
unset($usuario);