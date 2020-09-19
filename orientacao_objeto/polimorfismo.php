<div class="titulo">Polimorfismo</div>
<?php
abstract class Comida{
    public $peso;
}
class Arroz extends Comida{

}
class Feijao extends Comida{

}
class Sorvete extends Comida{

}
class Pessoa {
    public $peso;
    function __construct($peso){
        $this->peso = $peso;
    }
    public function comer(Arroz $comida){
        $this->peso += $comida->peso;
    }
}
$p = new Pessoa(60);
$c1 = new Arroz();
$c1->peso = 0.50;
$c2 = new Sorvete();
$c2->peso = 0.500;
$p->comer($c1);
//$p->comer($c2);
echo $p->peso;