<div class="titulo">Try / Catch</div>

<?php
//echo 7 / 0;
//echo intdiv(7,0);

try {
    echo intdiv(7,0);
} catch(Error $e) {
    echo 'não funciona não meu irmão<br>';
}

try {
    throw new Exception('Um erro é um erro, ok');
    echo intdiv(7, 0);
} catch(DivisionByZeroError $e){
    echo 'Um erro é um erro, já o seu é burrice';
} catch(Throwable $e){
    echo 'Porra mano denovo' . $e->getMenssage() . '<br>';
} finally{
    echo 'sempre executado';
}