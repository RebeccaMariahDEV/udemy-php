<div class="titulo">Tipo String</div>
<?php
//concatenação de string é feita com o ponto em php
echo 'oi '. ' tudo '. ' bem?';
echo '<br>';
echo 'também', ' aceito ', 'virgula';
echo '<br>';

print('Gosto tanto de você que até prefiro esconder...');
print '<br>';

//Algumas funções:
echo '<br>'. strtoupper('maximizado');
echo '<br>'. strtolower('MINIMIZADO');
echo '<br>'. ucfirst('rebecca'); // só a primeira letra é maiuscula
print '<br>'. ucwords('rebecca mariah avelino');
print '<br>'. strlen('quantas letras tem aqui?');
print '<br>'. mb_strlen('tudo bem também');// assim tira as acentuações da conta
echo '<br>'. substr('só uma parte da string', 7, 6); //podendo selecionar por indice, uma parte do texto, 
//sem o segundo paramento ele vai ate o fim
echo '<br>'. str_replace('isso', 'aquilo', 'trocar isso por isso');



