<div class="titulo">Desafio For</div>
<?php
$impri = '';
for($cont = 1; $cont <= 5; $cont++){
    $impri .= '#';
    echo "$impri<br>";
}
echo '<hr>';
for($impri2 = '#'; $impri2 !== '######'; $impri2 .= '#' ){
    echo "$impri2<br>";
}