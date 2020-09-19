<div class="titulo">Metodos Magicos</div>
<?php
//são todos os metodos internos que começa com dunder ou __
class Pessoa{
    public $nome;
    public $idade;
    function __construct($nome, $idade){
        echo 'Construtor chamado! <br>';
        $this->nome = $nome;
        $this->idade = $idade;
    }
    function __destruct(){
        echo 'Morreu! <br>';
    }
    public function __toString(){
        return "{$this->nome} tem {$this->idade} anos.";
    }
    public function apresentar(){
        echo $this . '<br>';
    }
    public function __get($atrib){
        echo "Lendo um atributo não declarado: {$atrib}<br>";
        return 'verificar o codigo';
    }
    public function __set($atrib, $valor){
        echo "Alterando atributo não declarado: {$atrib}/{$valor}";
    }
    public function __call($metodo, $parametro){
        echo "tentando executar método ${metodo}";
        echo ", com os parametros: ";
        print_r($parametro);
    }
}

$pessoa = new Pessoa('Ricardo', 40);
$pessoa->apresentar(); //chamando o __toString
echo $pessoa , '<br>'; //chamando o __toString
$pessoa->nome = 'Reinaldo'; 
$pessoa->apresentar(); ////acessa o atributo diretamentre sem __call
$pessoa->nomeCompleto = 'Muito legal'; //__set pq o parametro não existe
$pessoa->nomeCompleto; //__get
echo $pessoa->nome; //acessa o atributo diretamentre sem __get
$pessoa->exec(1, 'teste', true, [1, 13.1415, -06]); // __call
echo '<br>';
$pessoa = null; //destrutor