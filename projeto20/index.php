<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto Upload de Arquivos</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <div class="container-fluid mt-3">
        <center><img src="LOGO.jpg" width="200"></center>
            <p>PROGRAMADOR ESPARTANO</p>
            <h2>UPLOAD DE ARQUIVOS</h2>
            <div class="card">
                <div class="card-body">
                    <form action="envia.php" method="POST" enctype="multipart/form-data">
                        <input type="file" name="arquivo">
                        <input type="submit" value="Enviar">
                    </form>
                </div>
            </div>

            <h6 class="mt-3">Arquivos Enviados</h6>
            <?php require 'lista.php'; ?>
    </div>
</body>

</html>