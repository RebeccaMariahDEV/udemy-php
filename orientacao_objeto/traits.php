<div class="titulo">Traits 01</div>
<?php
trait validacao  {
    public $a = 'valor a';
    public function validarString($str){
        return isset($str) && $str !== '';
    }
}

trait validacaoMelhor {
    public $b = 'Valor b';
    private $c = 'valor C (privado)';
    public function validarStringMelhor($str){
        return isset($str) && trim($str); //trim tira os espaços em branco das strings
    }
}

class Usuario{
    use validacao, validacaoMelhor;
    public function imprimirValorC(){
        echo '<br>', $this->c;
    }
}
//não podemos acessar metodos ou atributos diretamente de uma trait, antes tem que usar em uma classe
$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validarStringMelhor(' '));
echo '<br>';
echo $usuario->a, '<br>', $usuario->b;
echo $usuario->imprimirValorC();