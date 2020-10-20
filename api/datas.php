<div class="titulo">Datas #01</div>
<?php
echo time() . '<br>';
echo  date('D, d \d\e M \d\e Y H: i A'); // datas no formato tradicional brasileiro
echo  '<br>';
echo  strftime( '%A, %d de %B de %Y', time()) . '<br>'; //dias e mês em ingles
echo  setlocale(LC_TIME, 'pt_BR','pt_BR.utf-8'); //para trabalhar com o portugues
echo  strftime( '%A, %d de %B de %Y', time()) . '<br>';

$amanha = time() + (24 * 60 * 60);
echo strftime('%A, %d, de %B de %Y', $amanha) . '<br>';
$proximaSemana = strtotime('+1 week');
echo  strftime('%A, %d de %B de %Y', $proximaSemana) . "<br>";

$dataFixa = mktime(15, 30, 3, 6, 21, 2008);
echo strftime('%A, %d de %B de %Y - %H:%M:%S', $dataFixa);
