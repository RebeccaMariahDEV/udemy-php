<div class="titulo">Modificador Final</div>
<?php
abstract class Abstrata{
    abstract public function metodo1();
    final public function metodo2(){
        echo 'Não vou mudar!<br>';
    }
}
class Classe extends Abstrata{
    public function metodo1(){
        echo 'Executando metodo 1<br>';
    }
    /*public function metodo2(){
        echo 'Exendendo metodo 2<br>';
    }*/
}
$classe = new Classe();
$classe->metodo1();
//$classe->metodo2(); //o metodo 2 não pode ser modificado

final class Unica{
    public $att = 'valor x';
}
$unica = new Unica();
echo $unica->att;
/*class Duplicata extends Unica{
    public $att2
}*/ 