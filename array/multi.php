<div class="titulo">Multidimensionais</div>
<?php
$dados = [
    [
        'nome'=> 'renato',
        'idade'=> 26,
        'naturalidade'=> 'São Paulo'
    ],
    [
        'nome' => 'vitoria',
        'idade'=> 24,
        'naturalidade'=>'bahia'
    ],
];
print_r($dados);
echo '<br>'. $dados[0]['idade'];
//tamabem é possivel colocar chave para um array
$dados[] = ['nome'=> 'Florinda', 'idade'=> 30, 'naturalidade'=> 'cidade do mexico'];
echo '<br>';
print_r($dados);
echo '<br>'. $dados[2]['idade'];
//adicionar dinamicamente
$dados[2]['vizinho'] = 'chaves';
echo '<br>';
print_r($dados);
unset($dados[1]);//remover o array1
echo '<br>';
print_r($dados);