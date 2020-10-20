<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<div class="titulo">Formulario</div>
<h2>Cadastro</h2>
<?php

?>
<form action="#" method="post">
    <div class="form-row">
        <div class="form-group col-md-9">
            <label for="nacimento">Nome</label>
            <input type="text"
                   class="form-control"
                   id="nacimento"
                   name="nome"
            placeholder="Nome"
            value="<?= $_POST['nome'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="nacimento">Nacimento</label>
            <input type="text"
                   class="form-control"
                   id="nacimento"
                   name="nacimento"
            placeholder="Nacimento"
                   value="<?= $_POST['nacimento'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input type="email"
                   class="form-control"
                   id="email"
                   name="email"
            placeholder="Email"
                   value="<?= $_POST['email'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="site">Site</label>
            <input type="text"
                   class="form-control"
                   id="site"
                   name="site"
            placeholder="Site"
                   value="<?= $_POST['site'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="filhos">Quantidade de filhos</label>
            <input type="number"
                   class="form-control"
                   id="filhos"
                   name="filhos"
            placeholder="Filhos"
                   value="<?= $_POST['filhos'] ?>">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="salario">Salário</label>
            <input type="text"
                   class="form-control"
                   id="salario"
                   name="salario"
            placeholder="salario"
                   value="<?= $_POST['salario'] ?>">
        </div>
    </div>
    <button type="submit" class="btn btn-primary btn-lg">
        Enviar
    </button>
</form>

