<div class="titulo">Include Função</div>
<?php
echo 'Carregando: include_func<br>';
function carregarArquivo(){
    include('includes_arquivo.php');
    echo $variavel . '<br>';
    echo soma(4,7) . '<br>';
}
echo 'Novamente no arquivo include_func<br>';
//echo soma(6,7) . '<br>';
carregarArquivo();


