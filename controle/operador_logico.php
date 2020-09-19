<div class="titulo">Operadoes Lógicos</div>
<?php
echo 'Negação logica';
echo '<br>';
echo '<br>';
var_dump(true);
echo '<br>';
var_dump(!true);// !se verdadeiro é falso, !! é a mesma ideia, igual not
echo '<br>';
echo '<br>';
echo 'Tabela de AND <br>';
var_dump(true && true);// aq and pode ser usado pelos && ou o and mesmo
echo '<br>';
var_dump(true && false);
echo '<br>';
var_dump(false && false);
echo '<br>';
echo '<br>';
echo 'Tabela do OR <br>';
echo '<br>';
var_dump(true || true);
echo '<br>';
var_dump(false || true);
echo '<br>';
var_dump(false || false);
echo '<br>';
var_dump(true || false);
echo '<br>';
echo '<br>';
echo 'Tabela do "xor"(ou exclusivo)';
echo '<br>';
echo '<br>';
var_dump(true xor true); // ou um ou outro, não pode ser os dois
echo '<br>';
var_dump(true xor false);
echo '<br>';
var_dump(false xor true);
echo '<br>';
var_dump(false xor false);
echo '<br>';
echo '<br> ou usar o !='; //diferente
echo '<br>';
echo '<br>';
var_dump(true != true); // ou um ou outro, não pode ser os dois
echo '<br>';
var_dump(true != false);
echo '<br>';
var_dump(false != true);
echo '<br>';
var_dump(false != false);

