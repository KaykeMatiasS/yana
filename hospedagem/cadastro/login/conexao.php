<?php
    define('HOST', 'us-cdbr-east-05.cleardb.net');
    define('USER', 'b49c19c614f020');
    define('PASSWORD', '85a2c26e');
    define('DATABASE', 'heroku_ebd1ca9ecd5833f');

    $conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die ('Erro ao conectar ao banco de dados');
?>