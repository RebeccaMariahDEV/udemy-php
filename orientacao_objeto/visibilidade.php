<div class="titulo">Visíbilidade</div>
<?php
class A{
    public $publico = 'publico';
    protected $protegido = 'protegido';
    private $privado = 'privado'; // ele fica na mesma classe

    public function mostrarA(){
        
        echo "Classe a) Publico = {$this->publico}<br>";
        echo "Classe a) Privado = {$this->privado}<br>"; 
        echo "Classe a) Protegido = {$this->protegido}<br>";
    }

    private function naoMostrar(){
        echo 'Não vou imprimir';
    }
}

$a = new A();
$a->mostrarA();
//$a->naoMostrar();

class B extends A{
    public function mostrarB(){
        echo "Classe b) publico = {$this->publico}<br>";
        echo "Classe b) privado = {$this->privado}<br>";// não sera mostrado pq não é trasmitida por herança
        echo "Classe b) protegido = {$this->protegido}<br>";
    }
}
$b = new B();
$b->mostrarB();