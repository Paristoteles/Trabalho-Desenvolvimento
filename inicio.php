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

    <!--CONTEÚDO-->

    <main>

        <div class="container marketing">
            <div class="row">
                <div class="col-lg-4">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Monitores, Teclados e Mouses pela metade do preço! <span class="text-muted">Entre e descubra!</span></h2>
                    <p class="lead">Venha aproveitar a melhor rede de vendar de aparelhos tecnológicos a preço de fábrica do Brasil! Temos parcerias com a Razer, Logitech, Aozor, Guaraná Antártica e muito mais!</p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image height="100%" width="500" height="500" style="border:0;" xlink:href="https://wallpaperaccess.com/full/336500.jpg"></image>
                    </svg>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Localização. <span class="text-muted">Descubra onde está nossa sede!</span></h2>
                    <p class="lead">R. Arminho Mioto - Anta Gorda, RS, 95980-000</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d872.6371631229039!2d-52.0124968!3d-28.9711088!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951da9d24fc7edcf%3A0x7ce227347f48e4be!2sR.%20Arminho%20Mioto%20-%20Anta%20Gorda%2C%20RS%2C%2095980-000!5e0!3m2!1spt-BR!2sbr!4v1637846671684!5m2!1spt-BR!2sbr" width="500" height="500" style="border:0;"></iframe>
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Sobre o dono</h2>
                    <p class="lead">Xaropinho Júnior, nasceu em 27/03/1979, em Bento Gonçalves, RS. </p>
                </div>
                <div class="col-md-5">
                    <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <image height="80%" width="500" height="500" style="border:0;" xlink:href="data:image/jpeg;base64,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"></image>
                    </svg>

                </div>
            </div>

            <hr class="featurette-divider">
        </div>
    </main>

    <!--RODAPÉ-->

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