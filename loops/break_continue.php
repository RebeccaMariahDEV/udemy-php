<div class="titulo">Break Continue</div>
<?php
$cont = 10;
for(;;){
    echo "$cont<br>";
    $cont++;
    if($cont > 20){
        break;
    }
}
echo "fim <br>";
echo '<hr>';
for(;;){
    $cont++;
    if($cont % 2 ===1){
        continue;
    }
    echo "$cont<br>";
    if($cont >= 30){
        break;
    }
}
