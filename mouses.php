<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Technolosell</title>

    <style>
        .redesocial {
            height: 40px;
            width: 40px;
        }
        .card-title{
            text-align: center;
        }
    </style>

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

    require_once("config.php");
    require("listar.php");
    //$conexaocarrinho = new PDO ('mysql:host=localhost;dbname="produtos',"root","");

    $select = $pdo->prepare("SELECT * FROM produtos WHERE categoria = 'm' ORDER BY idprodutos DESC");
    $select->execute();
    $fetch = $select->fetchAll();
    ?>
    <div class='row'>
        <?php

        foreach ($fetch as $produto) {
        ?>
            <div class="row" style="width: 18rem;">

                <img src="<?php echo $produto['arquivo'] ?>" class="card-img-top" height="200px">

                <div class="card-body">
                    <h5 class="card-title"><?php echo $produto['nome'] ?></h5>
                    <P class="card-title">R$ <?php echo $produto['preco'] ?></h5>
                    <p class="card-text"><?php echo $produto['descricao'] ?></p>
                    <a class="btn btn-dark" href="carrinho.php?par=<?php echo $produto['idprodutos'] ?>">ADICIONAR AO CARRINHO</a>
                </div>
            </div>

        <?php
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