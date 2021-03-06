<div class="titulo">Desafio Switch</div>
<form action="#" method="post">
    <input type="text" name="param">
    <select name="conversao" id="conversao">
        <option value="km-milha">KM > Milha</option>
        <option value="milha-km">Milha > KM</option>
        <option value="metro-km">Metro > km</option>
        <option value="km-metro">KM > Metro</option>
    </select>
    <button>Calcular</button>
</form>
<style>
    form > * {
        font-size: 1.8rem;
    }
</style>
<?php
const FATOR_KM_MILHA = 0.621371;
const FATOR_METRO_KM = 1000;

$param = $_POST['param'] ?? 0;

switch ($_POST['conversao']) {
    case 'km-milha':
        $distancia = $param * FATOR_KM_MILHA;
        $mensagem = "$param km(s) = $distancia Milha(s)";
        break;
    case 'milha-km':
        $distancia = $param / FATOR_KM_MILHA;
        $mensagem = "$param Milha(s) = $distancia KM(s)";
        break;
    case 'metro-km':
        $distancia = $param / FATOR_METRO_KM;
        $mensagem = " $param Metro(s) = $distancia Km(s)";
        break;
    case 'km-metro':
        $distancia = $param * FATOR_METRO_KM;
        $mensagem = "$param Km(s) = $distancia Metro(s)";
        break;
    default:
    $mensagem "Nenhum valor calculado"; 
}
//echo "<p> $mensagem</p>";
