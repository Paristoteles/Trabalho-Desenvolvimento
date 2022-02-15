<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Technolosell</title>


</head>

<body>

    <!--CABEÇALHO-->

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" aria-current="page" href="inicio.php">Technolosell</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link" href="monitores.php">Monitores</a>
                    <a class="nav-link" href="mouses.php">Mouses</a>
                    <a class="nav-link" href="teclados.php">Teclados</a>
                    <a class="nav-link" href="usuario.php">Perfil</a>
                    <a class="nav-link" href="cadastrar.php">Cadastrar Produto</a>
                </div>
            </div>
        </div>
</nav>


<?php

//iniciando a conexão com o banco de dados 
include_once("config2.php");
if (!$conn) {
 die('Não foi possível conectar ao Banco de Dados');
}
$conexao= mysqli_connect("localhost", "root", "", "jesuscristo");
$sql = mysqli_query($conn, "SELECT * FROM produtos WHERE categoria = 'a' ORDER BY idprodutos DESC");
//$sql = mysqli_query("SELECT * FROM produtos ORDER BY id DESC");
?>
<div class='row'>
<?php


while($user_data = mysqli_fetch_assoc($sql)){
    echo "<div class='col-3 mb-3 d-flex align-items-stretch'>";
    echo "<div class='card'>";
   // echo "<div class='card-body'>
   // <form action='envia.php' method='POST' enctype='multipart/form-data'>
   //     <input type='file' name='arquivo'>
   //     <input type='submit' value='Enviar'>
  //  </form>
//</div>";
    echo "<div class='card-body'>";
    echo " <h6 class='card-title'>".$user_data['nome']."</h6>";
    echo " <h6 class='card-title'>".$user_data['preco']."</h6>";
    echo " <h6 class='card-title'>".$user_data['descricao']."</h6>";

    echo "<a href='carrinho.php' class='btn btn-sm btn-secondary'>Adicionar Item</a>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

}


?>








 </div>


















<nav class="navbar fixed-bottom navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Technolosell</a>
            <a class="navbar-brand" href="https://hospedario.com.br/wp-content/uploads/2020/07/Quanto-Ganha-o-Xaropinho.jpg"><img src="imagensredesocial/facebook.png" class="redesocial"></a>
            <a class="navbar-brand" href="https://hospedario.com.br/wp-content/uploads/2020/07/Quanto-Ganha-o-Xaropinho.jpg"><img src="imagensredesocial/instagram.png" class="redesocial"></a>
            <a class="navbar-brand" href="https://hospedario.com.br/wp-content/uploads/2020/07/Quanto-Ganha-o-Xaropinho.jpg"><img src="imagensredesocial/twitter.png" class="redesocial"></a>
            <a class="navbar-brand" href="#">© 2021 Technolosell, Inc</a>
        </div>
    </nav>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>


























