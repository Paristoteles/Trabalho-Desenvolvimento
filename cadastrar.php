<?php
session_start();
require_once("config2.php");

if (!empty($_SESSION['mensagem'])) {
    echo $_SESSION['mensagem'];
    unset($_SESSION['mensagem']);
}
?>
<form action="listar.php" method="get" accept-charset="utf-8">
    <label>Selecione a categoria</label>
    <select name="categoria" required>
        <option disabled selected></option>
        <option value="a">Monitor</option>
        <option value="m">Mouse</option>
        <option value="t">Teclado</option>
    </select></br>
    NOME PRODUTO <input type="text" name="nomeproduto"></br>
    PREÇO PRODUTO <input type="number" name="preco"></br>
    DESCRICAO PRODUTO <input type="text" name="descricao"></br>
    <div class="card-body">
        <form action="envia.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="arquivo">
        </form>
    </div>
    <input type="submit" name="enviar">


</form>