<?php
session_start();
require_once("config2.php");
if (isset($_GET['enviar'])){
    if (!empty($_GET['nomeproduto']) || !empty($_GET['preco']) || !empty($_GET['descricao'])) {
        $nome=$_GET['nomeproduto'];
        $preco=$_GET['preco'];
        $descricao=$_GET['descricao'];
        $categoria=$_GET['categoria'];

        $comando="INSERT INTO produtos(nome, preco, descricao, categoria) VALUES ('$nome', '$preco', '$descricao', '$categoria')";
        $enviar = mysqli_query($conn, $comando);

        if($enviar){
            $_SESSION['mensagem']="Produto Cadastrado";
            header("location:cadastrar.php");
            exit;
        }else{
            $_SESSION['mensagem']="Erro ao cadastrar produto";
            header("location:cadastrar.php");
            exit;
        }
    }else{
        $_SESSION['mensagem']="Campos não preenchidos";
        header("location:cadastrar.php");
        exit;
    }
}

?>