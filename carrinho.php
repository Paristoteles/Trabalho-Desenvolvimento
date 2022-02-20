<?php session_start() ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DID/xhtmll-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset-utf-8" />
    <title>Technolosell</title>
</head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<style>
    .redesocial {
        height: 40px;
        width: 40px;
    }
</style>
<?php
include_once("config.php");
$total = 0;
?>

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



    <section class="vh-100" style="background-color: lightgray">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col">
                    <h1>Carrinho</h1>
                    <div class="card-body p-4">
                        <div class="row align-items-center">




                            <table class="table table-hover" width="700">
                                <thead>
                                    <td>Produto</td>
                                    <td>Valor</td>
                                    <td>Descrição</td>
                                </thead>
                                <?php
                                if (isset($_SESSION['venda'])) {
                                } else {
                                    $_SESSION['venda'] = array();
                                }
                                if (isset($_POST['par'])) {
                                    $prod = $_POST['par'];
                                    $_SESSION['venda'][$prod] = 1;
                                }
                                if (isset($_POST['del'])) {
                                    $del = $_POST['del'];
                                    unset($_SESSION['venda'][$del]);
                                }




                                ?>
                                </br>
                                <?php

                                foreach ($_SESSION['venda'] as $Prod => $Quantidade) {
                                    $select = $pdo->prepare("SELECT * FROM produtos WHERE idprodutos =:id");
                                    $select->execute(["id" => $Prod]);
                                    $fetch = $select->fetchAll();
                                    echo '<tr>';
                                    echo '<td>' . $fetch[0]['nome'] . '</td>';
                                    echo '<td> R$ ' . $fetch[0]['preco'] . '</td>';
                                    echo '<td>' . $fetch[0]['descricao'] . '</td>';
                                    echo '</tr>';
                                    $total += $fetch[0]['preco'];
                                }

                                echo '<tr>';
                                echo "<td colspan='3' align='right'>Total: $total</td>";
                                echo '</tr>';
                                ?>

                            </table>

                            <td colspan="2"><a href="deletar.php" class="btn btn-dark">Deletar Carrinho</a></td></br></br>
                            <hr class="mp4">
                            </hr>
                            <h3>Compra</h3>

                            <form>
                                <div class="form-group">
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Endereço de entrega" required></br>
                                    <input type="number" class="form-control" id="cep" placeholder="CEP" required></br>
                                    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Cidade" required></br>
                                    <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email para contato" required></br>

                                    <a href="deletar.php" class="btn btn-dark">Finalizar Pedido </a>


                            </form>

                        </div>
                    </div>


                </div>
            </div>
        </div>
        </div>
        </div>
    </section>

    <!-- RODAPÉ -->

    <nav class="navbar navbar-dark bg-dark">
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