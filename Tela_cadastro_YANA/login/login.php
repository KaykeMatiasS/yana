<?php
    session_start();
    include('conexao.php');

    if(empty($_POST['email']) || empty($_POST['senha'])) {
        header('Location: index_login.php');
        exit();
    }

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query1 = "SELECT * FROM bd_yana.usuario WHERE Email_Usuario = '{$email}' and Senha_Usuario = '{$senha}'";
    $result1 = mysqli_query($conexao, $query1);
    $row1 = mysqli_num_rows($result1);

    if($row1 == 1) {
        $_SESSION['email'] = $email;
        header('Location: painel.php');
        exit();
    }else {
        $query2 = "SELECT * FROM bd_yana.especialista WHERE Email_Esp = '{$email}' and Senha_Esp = '{$senha}'";
        $result2 = mysqli_query($conexao, $query2);
        $row2 = mysqli_num_rows($result2);
        if($row2 == 1) {
            $_SESSION['email'] = $email;
            header('Location: painel.php');
            exit();
        }else {	
            $_SESSION['nao_autenticado'] = true;
            header('Location: index_login.php');
            exit();
        }
    }

?>