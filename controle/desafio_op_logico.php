<div class="titulo">Desafio OP Lógico</div>
<!--
    Dois trabalhos, um terça outro quinta
    - se os dois forem realizados, fim de semana eles vão ao shopping para comprar uma tv de 50pol e tomar sorvete
    - se o trabalho de terça ou quinta der certo,  fim de semana vão ao shopping para comprar uma tv 32pol e tomar sorvete
    - se não  trabalhar, ficarão em casa 
-->
<form action="#" method="post">
    <div>
    <label for="t1">Trabalho 1 (terça)</label>
    <select name="t1" id="t1">
    <option value="1">Executado</option>
    <option value="0">Não executado</option>
    </select>
    </div>
    <div>
    <label for="t2">Trabalho 2 (quinta)</label>
    <select name="t2" id="t2">
    <option value="1">Executado</option>
    <option value="0">Não executado</option>
    </select>
    </div>
    <button>Executar</button>
</form>
<style>
    button , select {
        font-size: 1.8rem;
    }
</style>
<?php
$t1 = $_POST['t1'] === '1';
echo '<br>';
$t2 = !!$_POST['t2'];
$tv = '';
$sorvete = false;

if($t1 and $t2){
    $tv = '50';
    echo "<br> Vamos comprar uma tv de '$tv'";
}
elseif($t1 xor $t2){
    $tv = '32';
    echo "<br> Vamos comprar uma tv de '$tv'";
}
else {
    echo 'ficaremos em casa';
}
if($t1 or $t2){
    $sorvete = true;
    echo '<br> Vamos tomar sorvete';
}


