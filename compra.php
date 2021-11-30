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

<style>
  body {
    background: rgb(85, 89, 92);
    font-family: Arial, Helvetica, sans-serif;
}

.container {
    background: #fff !important;
    border: none;
    border-radius: 20px;
}

h6.text-muted {
    color: #6c757d85 !important
}

h4.text-danger {
    margin-left: 250px;
    color: #f11126 !important
}

.htwo {
    margin-left: 200px
}

.scol {
    padding-left: 60px
}

.row.r2 {
    margin-bottom: 20px
}

.row.r2:after {
    content: '.';
    font-size: 0;
    display: block;
    height: 1px;
    width: 77%;
    background: #a9abae3d
}

h3.payment {
    margin-top: 30px
}

h6.payment-method {
    margin-top: 30px
}

.r5.col-2 {
    padding-left: 0
}

div.col-2 {
    cursor: pointer
}

.personalDetails {
    margin-right: 100px;
    padding-top: 30px
}

.form-control {
    border: none;
    border-radius: none;
    border-bottom: 1px solid #a9abae3d
}

.form-control:focus {
    border: none;
    color: #000 !important;
    font-weight: bold;
    border-color: #fff;
    border-bottom: 1px solid #a9abae3d;
    outline: 0;
    box-shadow: 0 0 0 0 rgba(0, 123, 255, .25)
}

.far {
    color: #adb5bd
}

.th {
    margin-top: 10px
}

.btn.btn-primary {
    border: none;
    border-radius: 40px;
    width: 40%
}

@media screen and (max-width: 1200px) {
    .rcol {
        width: 100%
    }

    .scol {
        width: 100%
    }
}

@media screen and (max-width: 768px) {
    .container {
        width: 95%
    }

    .row.r2:after {
        width: 95%
    }
}

</style>

  <body>
    <<div class="container m-5 mx-auto">
    <div class="row main">
        <div class="col-lg-6 col-12 my-5 rcol">
            <h3 class="product text-center">NOME DO PRODUTO</h3>
            <div class="image text-center"><img src="data:image/png;base64,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" width="300px" height="350px"></div>
            <p class="text-center my-3">DESCRIÇÃO DO PRODUTO</p>
        </div>
        <div class="col-lg-6 col-12 my-5 scol">
            <div class="row r1">
                <h6 class="text-muted">PREÇO TOTAL:</h6>
                <h4 class="text-danger">58&#36;</h4>
            </div>
            <div class="row r3">
                <h3 class="payment">DETALHES DO PAGAMENTO</h3>
            </div>
            <div class="row r4">
                <h6 class="payment-method">SELECIONE MÉTODO DE PAGAMENTP:</h6>
            </div>
            <div class="row r5">
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/mastercard-logo.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/visa.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/amex.png" /></div>
                <div class="col-2"><img src="https://img.icons8.com/color/48/000000/paypal.png" /></div>
            </div>
            <div class="row r6">
                <form class="personalDetails">
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Nome do Proprietário"> </div>
                    <div class="form-group"> <input type="text" class="form-control" placeholder="Número do Cartão"> </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-4"> <input type="text" class="form-control" placeholder="MM/YY"> </div>
                            <div class="col-4 offset-2"> <input type="password" class="form-control" placeholder="CCV"> </div>
                            <div class="col-2 th"><i class="far fa-credit-card"></i> </div>
                        </div>
                    </div> 
                    <a href="inicio.php"><button type="button" class="w-100 btn btn-lg btn-dark">FINALIZAR PEDIDO</button></a>
                </form>
            </div>
        </div>
    </div>
</div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  </body>
</html>