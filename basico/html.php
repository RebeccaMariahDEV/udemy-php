<div class="titulo">Integração html</div>
<h1 center>
    <?php
    echo "Olá";
    echo "<small>";
    echo ' pequeno';
    ?>
</h1>
<?= "<div center azul>Outro modo de usar em linha!</div>"; ?>
<br>
<div center><button dobro><?="Legal";?></button></div>
<style>
    button{
        padding: 5px 20px;
        background-color: #4286f4;
        color: #eee;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }
    [azul]{
        color: #4286f4;
    }
    [dobro]{
        font-size: 2rem;
    }
</style>