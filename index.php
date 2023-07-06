<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="css/static/login/generalStyles.css" type="text/css" media="all" />

    <title>Login</title>
</head>

<body>
    <section class="d-flex justify-content-center flex-row align-items-center" id="loginBody">
        <div class="d-flex justify-content-center flex-row align-items-center" id="loginFormBody">
            <div id="form">
                <form action="login.php" method="POST">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Endereço de Email</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="login">
                        <div id="emailHelp" class="form-text">Nunca iremos compartilhar seu e-mail.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Senha</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="senha">
                    </div>
                    <?php 
                        if(isset($_SESSION['nao_autorizado'])): 
                    ?>
                    
                        <p style="color:red">Usuário ou senha inválidos</p>
                    
                    <?php 
                        endif;
                        unset($_SESSION['nao_autorizado']);
                    ?>
                        <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" style="color: white;" for="exampleCheck1">Lembre-me</label>
                    </div>
                    <div class="d-flex flex-row justify-content-end">
                        <button type="submit" class="btn btn-primary">Entrar Teste</button>
                    </div>
                </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>