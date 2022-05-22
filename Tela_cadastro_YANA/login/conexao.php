<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DATABASE', 'bd_yana');

    $conexao = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die ('Erro ao conectar ao banco de dados');
?>