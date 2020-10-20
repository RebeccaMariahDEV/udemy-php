<div class="titulo"> Download</div>
<?php
session_start();
$arquivo = $_SESSION['arquivo'] ?? [];
$pastaUpload = __DIR__. '/../files/';

