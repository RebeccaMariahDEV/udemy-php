<div class="titulo">Tipo Boleano</div>
<?php
echo TRUE; //converte o valor para 1
echo '<br>';
echo false; // não mostra nada
echo '<br>'. var_dump(true);
echo '<br>'. is_bool(false); // se sim sera 1 se não nada
echo '<br>';

// fazer as regras de conversão
print '<p>Regras:</p>';
print '<br>'. var_dump((bool)0);// 0 representa falso, qualquer outro numero será verdadeiro
print '<br>'. var_dump((bool)-6);
print '<br>'. var_dump((bool)''); //falso
print '<br>'. var_dump((bool)'0'); //falso
print '<br>'. var_dump((bool)'00'); //verdadeiro