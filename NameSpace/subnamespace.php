<?php namespace App; ?>

<div class="titulo">Sub-namespace</div>

<?php
echo __NAMESPACE__ . '<br>';
const constante = 123;

namespace App\Principal;
echo __NAMESPACE__ . '<br>';
const constante = 234;

namespace App\Principal\Expecifico;
echo __NAMESPACE__ . '<br>';
const constante = 345;

echo constante . '<br>';
echo \App\Principal\constante . '<br>';
