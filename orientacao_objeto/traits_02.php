<div class="titulo">Trait 02</div>
<?php
trait validacao{
    public function validarString($str){
        return isset($str) && $str !=='';
    }
}
trait validacaoMelhor{
    public function validarString($str){
        return isset($str) && trim($str);
    }
}
class Usuario{
    use validacao, validacaoMelhor{
        validacaoMelhor::validarString insteadOf validacao;
        //validacao::validarString insteadOf validacaoMelhor;
        //tem que escolher uma ou outra para funcionar as validações
        validacao::validarString as validacaoSimples;
        //se quiser utilizar ainda a mesma trait com nome de conflito basta mudar o nome  como acima
    }
}
$usuario = new Usuario();
var_dump($usuario->validarString(' '));
echo '<br>';
var_dump($usuario->validacaoSimples(' '));

