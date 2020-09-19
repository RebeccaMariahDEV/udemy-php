<div class="titulo">Membros Estaticos</div>
<?php
class A{
    public $naoEstatico = 'variável de instancia';
    public static $estatico = 'variável de classe(estática)'; //valor pertence a classe
    // usa quando tem constantes

    public function mostrarA(){
        echo "Não estatico = {$this->naoEstatico}<br>";
        //tentativa 1
        echo "Estatico = {$this->estatico}<br>";// não petence a instancia
        //tentativa 2
        echo "Estatico = {self::$estatico}<br>";
        //tentativa 3
        echo 'Estatico = ' . self::$estatico . '<br>';
    }

    public static function mostrarEstatico(){
        // echo " Não estatico = {$this->naoEstatico}<br>";
        // echo "Estatico = {$estatico}<br>";
        // para usar em funções é utilizando o self
        echo 'Estatico = ' . self::$estatico . '<br>';
    }
}
//$objA = new A(); instancia
//$objA->mostrarA();
//$objA->mostrarEstatico(); não é a forma ideal
// como acessar direto da classe
echo A::$estatico, '<br>';
A::mostrarEstatico();