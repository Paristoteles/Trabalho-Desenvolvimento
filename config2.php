<?php

$ip = "localhost";
$login = "root";
$senha ="";
$banco = "jesuscristo";

$conn = mysqli_connect($ip, $login, $senha, $banco);
if ($conn){
}else{
    echo "Erro de Conexão";
}
    ?>