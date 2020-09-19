<div class="titulo">Conversões em PHP</div>
<?php

echo is_int(PHP_INT_MAX);

// int para float
echo '<br>';
var_dump(PHP_INT_MAX + 1);
echo '<br>';
var_dump(1+1.0);
echo '<br>';
var_dump((float)3);

// float para int
echo '<p>Float para int</p>';
var_dump((int)3.7);
echo '<br>';
var_dump(intval('01001110100', 2));
echo '<br>';
var_dump((int) round(2.8));

//Operações com str
echo '<p>String</p>';
var_dump(3+ '2');
echo '<br>';
var_dump('3'. 2);
echo '<br>', is_string('3'. 2);
var_dump(1 + 'cinco');
echo '<br>';
var_dump(1 + '5 cinco');// não usar assim
