<?php
include_once 'header.php';
?>

<div class="row">
    <div class="col s12 m6 push-m3">
        <h3 class="ligth"> Adicionar Cliente </h3>
        <form action="add.php" method="POST">
            <div class="input-field col s12">
                <input type="text" name="nome" id="nome" required>
                <label for="nome"> Nome <label>
            </div>

            <div class="input-field col s12">
                <input type="text" name="sobrenome" id="sobrenome" required>
                <label for="sobrenome"> Sobrenome <label>
            </div>

            <div class="input-field col s12">
                <input type="email" name="email" id="email" required>
                <label for="email"> E-mail <label>
            </div>

             <div class="input-field col s12">
                <input type="text" name="idade" id="idade" required>
                <label for="idade"> Idade <label>
            </div>
            <button type="submit" name="btn-cadastrar" class="btn green"> Cadastrar </button>
            <a href="index.php" class="btn purple darken-4"> Lista de Clientes </a>
        </form>
      
    </div>
</div>

<?php
include_once 'footer.php';
?>

    