<?php
    session_start();
    include('conexao.php');

    if(empty($_POST['email']) || empty($_POST['senha'])) {
        header('Location: index_login.php');
        exit();
    }

    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $senha = mysqli_real_escape_string($conexao, $_POST['senha']);

    $query1 = "SELECT * FROM heroku_d82daf3248dddee.usuario WHERE Email_Usuario = '{$email}' and Senha_Usuario = '{$senha}'";
    $result1 = mysqli_query($conexao, $query1);
    $row1 = mysqli_num_rows($result1);

    if($row1 == 1) {
        $_SESSION['email'] = $email;
        $_SESSION['nome'] = mysqli_fetch_assoc($result1)['Apelido_Usuario'];
        header('Location: ../../index_usuario.php');
        exit();
    }else {
        $query2 = "SELECT * FROM heroku_d82daf3248dddee.especialista WHERE Email_Esp = '{$email}' and Senha_Esp = '{$senha}'";
        $result2 = mysqli_query($conexao, $query2);
        $row2 = mysqli_num_rows($result2);
        if($row2 == 1) {
            $_SESSION['email'] = $email;
            $_SESSION['nome'] = mysqli_fetch_assoc($result2)['Nome_Esp'];
            header('Location: ../../index_especialista.php');
            exit();
        }else {	
            $_SESSION['nao_autenticado'] = true;
            header('Location: index_login.php');
            exit();
        }
    }


?>