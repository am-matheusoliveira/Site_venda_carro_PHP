<?php
    define('HOST', '127.0.0.1');
    define('USUARIO', 'root');
    define('SENHA', '');
    define('DB', 'cfb_veiculos');
    //
    $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');
    //
    mysqli_set_charset($conexao, "utf8mb4");
?>


