<div class="titulo">Desafio 7 erros</div>
<?php
interface Template{
    function metodo1();
    public function metodo2($parametro);
}
abstract class ClasseAbstrata implements Template{ //classe abstrata não pode usar extends em interface, tem que usar implements
    public function metodo3(){
        echo 'Estou funcionando<br>';
    }
}
class Classe extends ClasseAbstrata{// classe não pode implementar classe
    function __construct($parametro){

    }
    public function metodo1(){
//os corpos podem ficar vazios
    }
    public function metodo2($parametro){
        
    }

}
$exemplo = new Classe('parametro');
$exemplo->metodo3();
//podemos usar final na classe ou em metodos para não ser herdada ou modificada