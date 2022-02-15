<?php

    print_r($_FILES['arquivo']);

    $nomedoarquivo = $_FILES['arquivo']['name'];
    $caminhoatualarquivo = $_FILES['arquivo']['tmp_name'];
    $caminhosalvar = 'arquivos/'.$nomedoarquivo;

    if(move_uploaded_file($caminhoatualarquivo, $caminhosalvar)){
        header("Location: index.php");
    }else{
        echo "Arquivo não carregado!";
    }

?>