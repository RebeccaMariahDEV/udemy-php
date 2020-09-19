<div class="titulo">Interface</div>
<?php
interface Animal {
    function respirar();

}

interface Mamifero{
    function mamar();
}

interface Felino extends Animal, Mamifero{
    function som(): string;
}
class Gato implements Felino {
    function respirar(){
        return 'Uso oxigênio pelos meus pulmões<br>';
    }
    function mamar(){
        return 'Meu alimento é o leite<br>';
    }
    function som(): string{
        return 'Miau';
    }
}

$animal = new Gato;
echo $animal->respirar();
echo $animal->mamar();
echo $animal->som();
echo '<br>';

//podemos criar varias interfaces diferentes, e se quiser implementar na classe é só usar, mais o nome da interface
//e teremos que definir a nova função que estara dentro da interface;os metodos dentro da interfaces são publicas,
//uma interface pode estender uma função

var_dump($animal instanceof Animal);