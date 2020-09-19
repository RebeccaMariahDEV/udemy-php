<div class="titulo">Operações com Array</div>
<?php
$dados1 = ["nome" => "Rebecca", "idade"=> 24];
$dados2 = ["naturalidade" => "Caraguatatuba"];
// adicionar elemntos no array direto
$dados2['Endereço']= 'Major Diogo';
$juncao = $dados1 + $dados2;
print_r($juncao);
// não pode repetir nome de chave, pois o que estiver no 1 array é oq prevalecera
echo '<br>'. is_array($juncao); // para saber se é ou não isso
echo '<br>'. count($juncao);
$indice = array_rand($juncao);
//echo '<br>'. $indice;
echo '<br>'. "$indice = $juncao[$indice]";
echo '<br>';
echo "$juncao"; // não mostra oq tem dentro apenas oq é
echo '<br>';
echo "{$juncao['idade']}";
echo '<br>';
// ou
echo "${juncao['idade']}";
echo '<br>';
// remover
unset($juncao['idade']);
echo '<br>';
print_r($juncao);
echo '<br>';
// removendo o array todo
unset($juncao);
var_dump($juncao);
echo '<br>';
// o + em arrays, ele vai somar um ao outro, porem ele junta pelas chaves, enão com numeros dara conflitos, 
// ele vai gerar um array com chave e valor
$pare = [0, 2, 4, 6, 8];
$impar = [1, 3, 5, 7, 9];
// para juntar os dois 
$decimais = array_merge($pare, $impar);
print_r($decimais);
echo '<br>';
// altera o array original
sort($decimais);
print_r($decimais);