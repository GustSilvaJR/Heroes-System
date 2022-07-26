<?php
    define('HOST', '127.0.0.1');
    define ('DB_NAME','berserkw');
    define ('DB_USER','root');
    define ('DB_PASSWORD','root');
    define('DB_PORT', '3308');

    $conexao = new mysqli(HOST,DB_USER, DB_PASSWORD, DB_NAME,DB_PORT);

    if($conexao -> connect_error){
        echo "Falha na conexão". $conexao -> connect_errno;
        exit();
    }
    
?>