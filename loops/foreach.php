<div class="titulo">Foreach</div>
<?php
$array = [ 1000 => 'seg', 'ter', 'qua', 'qui', 'sex', 'sab', 'dom'];
foreach($array as $dia){
    echo "$dia<br>";
}
echo '<hr>';
foreach($array as $indice => $dia){
echo "$indice => $dia<br>";
}
echo '<hr>';
$matrix = [ 
    ['a', 'e', 'i', 'o', 'u'],
    ['b', 'c', 'd']
];
foreach($matrix as $linha){
    echo "$linha<br>";
    foreach($linha as $valor){
        echo "$valor<br>";
    }
}
echo '<hr>';
$num = [1, 2, 3, 4, 5, 6, 7, 8, 9];
foreach($num as &$dobrar){
    $dobrar *= 2;
    echo "$dobrar<br>";
}
echo '<hr>';
print_r($num);