<?php
session_start();
include('conexao.php');

if ($_POST['login'] != "" && $_POST['senha'] != "") {
    $sql = "SELECT * FROM usuario as u WHERE u.email ='" . $_POST['login'] . "' AND u.senha = md5('" . $_POST['senha'] . "')";
    $result = $conexao->query($sql);

    if ($result->num_rows == 1) {
        $query = $result->fetch_row();
        $_SESSION['usuario'] = $query[1];
        $_SESSION['email'] = $query[2];

        header('Location: web/home.php');
    } else {
        $_SESSION['nao_autorizado'] = 1;
        header('Location: index.php');
        exit();
    }
} else {
    $_SESSION['nao_autorizado'] = 1;
    header('Location: index.php');
    exit();
}
