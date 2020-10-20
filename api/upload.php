<div class="titulo" >Upload</div>
<?php
print_r($_FILES);

if ($_FILES && $_FILES['arquivo']){
    $pastaUpload = '/Users/becca/Desktop/';
    $nomeArquivo = $_FILES['arquivo']['name'];
    $arquivo = $pastaUpload . $nomeArquivo;
    $tmp = $_FILES['arquivo']['tmp_nome'];

    if (move_uploaded_file($tmp, $arquivo)){
        echo '<br> Arquivo válido e enviado com sucesso.';
    }else{
        return '<br>Erro no upload do arquivo.';
    }
}
?>

<form action="#" method="post" enctype="multipart/form-data" >
    <input name="arquivo" type="file">
    <button>Enviar</button>
</form>
<style>
    input, button{
        font-size: 1rem;
    }
</style>