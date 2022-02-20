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
        body {
            background-color: lightgray;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

        .redesocial {
            height: 40px;
            width: 40px;
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


    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Cadastrar Produto</h5>

                        <?php
                        session_start();
                        require_once("config2.php");

                        if (!empty($_SESSION['mensagem'])) {
                            echo '<div class="alert alert-success">' . $_SESSION['mensagem'] . '</div>';
                            unset($_SESSION['mensagem']);
                        }
                        ?>

                        <form action="listar.php" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                            <label class="text-center mb-1 fw-light fs-5">Selecione a categoria</label>
                            <select class="form-control" name="categoria" required>
                                <option disabled selected></option>
                                <option value="a">Monitor</option>
                                <option value="m">Mouse</option>
                                <option value="t">Teclado</option>
                            </select></br>
                            <input type="text" class="form-control" name="nomeproduto" placeholder="Nome do Produto"></br>
                            <input type="number" class="form-control" name="preco" placeholder="Preço" required></br>
                            <input type="text" class="form-control" name="descricao" placeholder="Descrição" required></br></br>

                            <div class="card">
                                <div class="card-body">
                                    <input type="file" name="arquivo">
                                </div>
                            </div>

                            <input type="submit" class="w-100 btn btn-lg btn-dark" name="enviar">


                        </form>
                    </div>
                </div>
            </div>
        </div>
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