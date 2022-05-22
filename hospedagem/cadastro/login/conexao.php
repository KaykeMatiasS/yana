<?php
    define('HOST', 'us-cdbr-east-05.cleardb.net');
    define('USER', 'b29fb938e18320');
    define('PASSWORD', '80c894a9');
    define('DATABASE', 'heroku_d82daf3248dddee');

    $conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die ('Erro ao conectar ao banco de dados');
?>