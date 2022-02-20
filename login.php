<?php

session_start();


if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
    header("location: inicio.php");
    exit;
}


require_once "config.php";


$username = $password = "";
$username_err = $password_err = $login_err = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {


    if (empty(trim($_POST["username"]))) {
        $username_err = "Por favor, insira o nome de usuário.";
    } else {
        $username = trim($_POST["username"]);
    }


    if (empty(trim($_POST["password"]))) {
        $password_err = "Por favor, insira sua senha.";
    } else {
        $password = trim($_POST["password"]);
    }


    if (empty($username_err) && empty($password_err)) {

        $sql = "SELECT id, username, password FROM users WHERE username = :username";

        if ($stmt = $pdo->prepare($sql)) {

            $stmt->bindParam(":username", $param_username, PDO::PARAM_STR);


            $param_username = trim($_POST["username"]);


            if ($stmt->execute()) {

                if ($stmt->rowCount() == 1) {
                    if ($row = $stmt->fetch()) {
                        $id = $row["id"];
                        $username = $row["username"];
                        $hashed_password = $row["password"];
                        if (password_verify($password, $hashed_password)) {

                            session_start();


                            $_SESSION["loggedin"] = true;
                            $_SESSION["id"] = $id;
                            $_SESSION["username"] = $username;


                            header("location: inicio.php");
                        } else {

                            $login_err = "Nome de usuário ou senha inválidos.";
                        }
                    }
                } else {

                    $login_err = "Nome de usuário ou senha inválidos.";
                }
            } else {
                echo "Ops! Algo deu errado. Por favor, tente novamente mais tarde.";
            }

            unset($stmt);
        }
    }

    unset($pdo);
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>

    <title>Technolosell</title>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>

    <style>
        body {
            background-color: lightgray;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                    <div class="card-body p-4 p-sm-5">
                        <h5 class="card-title text-center mb-5 fw-light fs-5">Logar</h5>

                        <?php
                        if (!empty($login_err)) {
                            echo '<div class="alert alert-danger">' . $login_err . '</div>';
                        }
                        ?>

                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">


                            <div class="form-floating mb-3">
                                <input type="text" name="username" class="form-control <?php echo (!empty($username_err)) ? 'is-invalid' : ''; ?>" id="floatingInput" placeholder="Nome">
                                <span class="invalid-feedback"><?php echo $username_err; ?></span>
                            </div>


                            <div class="form-floating mb-3">
                                <input type="password" name="password" class="form-control <?php echo (!empty($password_err)) ? 'is-invalid' : ''; ?>" id="floatingPassword" placeholder="Senha">
                                <span class="invalid-feedback"><?php echo $password_err; ?></span>
                            </div>

                            <div class="d-grid">
                                <a href="inicio.php"><button type="submit" class="w-100 btn btn-lg btn-dark">Logar</button></a>
                            </div></br>
                            <div class="d-grid">
                                <a href="register.php"><button type="button" class="w-100 btn btn-lg btn-dark">Registrar</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>