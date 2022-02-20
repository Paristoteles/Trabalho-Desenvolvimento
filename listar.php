<?php
session_start();
require_once("config2.php");
if (isset($_POST['enviar'])) {
    if (!empty($_POST['nomeproduto']) || !empty($_POST['preco']) || !empty($_POST['descricao'])) {
        $nome = $_POST['nomeproduto'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $categoria = $_POST['categoria'];
        $imagem = $_FILES['arquivo'];

        $destino = "";
        $path = "";
        if (isset($_FILES['arquivo']['name']) && $_FILES['arquivo']['error'] == 0) {
            $path = 'arquivos/' . $_FILES['arquivo']['name'];
            $destino = '' . $path;
            $arquivo_tmp = $_FILES['arquivo']['tmp_name'];
            move_uploaded_file($arquivo_tmp, $destino);
        }

       
        $comando = "INSERT INTO produtos (nome, preco, descricao, categoria, arquivo) VALUES ('$nome', '$preco', '$descricao', '$categoria', '$path')";
        $enviar = mysqli_query($conn, $comando);

        if ($enviar) {
            $_SESSION['mensagem'] = "Produto Cadastrado";
            header("location:cadastrar.php");
            exit;
        } else {
            $_SESSION['mensagem'] = "Erro ao cadastrar produto";
            header("location:cadastrar.php");
            exit;
        }
    } else {
        $_SESSION['mensagem'] = "Campos não preenchidos";
        header("location:cadastrar.php");
        exit;
    }
}
