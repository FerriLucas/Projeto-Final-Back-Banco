<?php
    include 'connect.php';

    if(isset($_POST['botaoLogar'])) {
        $login = $_POST['login'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cliente WHERE email like '$login' and senha = '$senha'";
        $result = mysqli_query($con,$sql);

        $linhas = mysqli_num_rows($result);
        if($linhas == 1) {
            header('location:lista_cliente.php');
        }else {
            header('location:index.php');
        }

        // var_dump($result); //mostrar o que a função query retornou true ou false.
        
        // if($result) {
        //     echo "Dados encontrados com sucesso!";
        // }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>PROJETO</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/login.css">
</head>
<body>

    <div class="container col-11 col-md-9" id="form-container">

        <div class="row align-items-center gx-5">

            <div class="col-md-6 order-md-2">
                <h2>Faça o login</h2>
                <form method="POST">
                    <div class="form-floating mb-3">
                        <input type="email" class="form-control" id="login" name="login" placeholder="Digite seu email">
                        <label for="login" class="form-label"> Digite seu E-mail </label>
                    </div>

                    <div class="form-floating mb-3">
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Digite sua senha">
                        <label for="senha" class="form-label"> Digite sua senha </label>
                    </div>

                    <input type="submit" class="btn btn-primary" name="botaoLogar" value="Entrar">
                </form>
            </div>

            <div class="col-md-6 order-md-1">
                <div class="col-12">
                    <img src="login.svg" class="img-fluid" alt="Login">
                </div>

                <div class="col-12">
                    <a href="cadastro.php">Cadastra-se</a>
                </div>

            </div>

        </div>

    </div>
    
</body>
</html>