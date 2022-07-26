<?php
    if(!($_SESSION['usuario'] && $_SESSION['email'])){
        header('Location: index.php');
        exit();
    }
?>