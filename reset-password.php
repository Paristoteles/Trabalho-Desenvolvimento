<?php

session_start();
 

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
 

require_once "config.php";
 

$new_password = $confirm_password = "";
$new_password_err = $confirm_password_err = "";
 

if($_SERVER["REQUEST_METHOD"] == "POST"){
 
   
    if(empty(trim($_POST["new_password"]))){
        $new_password_err = "Por favor insira a nova senha.";     
    } elseif(strlen(trim($_POST["new_password"])) < 6){
        $new_password_err = "A senha deve ter pelo menos 6 caracteres.";
    } else{
        $new_password = trim($_POST["new_password"]);
    }
    
   
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = "Por favor, confirme a senha.";
    } else{
        $confirm_password = trim($_POST["confirm_password"]);
        if(empty($new_password_err) && ($new_password != $confirm_password)){
            $confirm_password_err = "A senha não confere.";
        }
    }
        
    
    if(empty($new_password_err) && empty($confirm_password_err)){
        
        $sql = "UPDATE users SET password = :password WHERE id = :id";
        
        if($stmt = $pdo->prepare($sql)){
            
            $stmt->bindParam(":password", $param_password, PDO::PARAM_STR);
            $stmt->bindParam(":id", $param_id, PDO::PARAM_INT);
            
           
            $param_password = password_hash($new_password, PASSWORD_DEFAULT);
            $param_id = $_SESSION["id"];
            
          
            if($stmt->execute()){
               
                session_destroy();
                header("location: login.php");
                exit();
            } else{
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
    <meta charset="UTF-8">
    <title>Redefinir senha</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color:lightgray;
        }

        .btn-login {
            font-size: 0.9rem;
            letter-spacing: 0.05rem;
            padding: 0.75rem 1rem;
        }

    </style>
</head>
<body>
<div class="container">
            <div class="row">
            <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
                <div class="card border-0 shadow rounded-3 my-5">
                <div class="card-body p-4 p-sm-5">
                    <h5 class="card-title text-center mb-5 fw-light fs-5">Redefinir Senha</h5>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"> 

            <div class="form-floating mb-3">
                <input type="password" name="new_password" id="floatingInput" class="form-control <?php echo (!empty($new_password_err)) ? 'is-invalid' : ''; ?>" value="<?php echo $new_password; ?>" placeholder="Nova senha">
                <span class="invalid-feedback"><?php echo $new_password_err; ?></span>
            </div>

            <div class="form-floating mb-3">
                <input type="password" name="confirm_password" id="floatingInput" class="form-control <?php echo (!empty($confirm_password_err)) ? 'is-invalid' : ''; ?>" placeholder="Confirmar senha">
                <span class="invalid-feedback"><?php echo $confirm_password_err; ?></span>
            </div>

            <div class="d-grid">
                <input type="submit" class="w-100 btn btn-lg btn-dark" value="Redefinir"></br></br>
                <a class="w-100 btn btn-lg btn-dark" href="usuario.php">Cancelar</a>
            </div>

        </form>
        </div>
                </div>
            </div>
            </div>
        </div>   
</body>
</html>