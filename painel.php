<?php
    session_start();
    include('verifica_login.php');
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<body>
    <h1>Bem vindo: <?php echo $_SESSION['usuario']?></h1>
    <h3><a id="logout" href="logout.php">Sair</a> 
</body>
</html>