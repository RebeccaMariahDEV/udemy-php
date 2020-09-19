<div class="titulo">Constante</div>
<?php
define('TAXA_DE_JUROS', 5.9);
print TAXA_DE_JUROS;
echo '<br>';
const NOVA_TAXA = 2.6;
echo NOVA_TAXA;
echo '<br>';
$valor = 2.8;
const NOVA1 = 2.8 +1.5;
define('NOVISSIMA_TAXA', $valor);
echo NOVISSIMA_TAXA;
echo '<br> linha:', __LINE__;
echo '<br> folha:', __FILE__;
echo '<br> diretorio:', __DIR__;

