<div class="titulo">Classe Data</div>
<?php
class Data{
    public $dia = 1;
    public $mes = 1;
    public $ano = 1970;

    public function apresentar(){
        echo "{$this->dia}/{$this->mes}/{$this->ano}";
    }
}
$aniversario = new Data;
$aniversario->dia= 25;
$aniversario->mes= 12;
$aniversario->ano= 1995;
$aniversario->apresentar();
echo '<br>';
$namoro = new Data;
$namoro->dia= 25;
$namoro->mes= 1;
$namoro->ano= 2020;
$namoro->apresentar();
