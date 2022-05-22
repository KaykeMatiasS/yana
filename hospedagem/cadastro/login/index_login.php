<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style_usuario.css">
    <link rel="shortcut icon" href="../Fotos/logo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>

    <div style="height: 350px;display: flex;flex-direction: column;align-items: center;justify-content: center;" id="bloco">
    
        
        <header style="margin-right: 40px;">Login</header>
        
        <?php
            if(isset($_SESSION['nao_autenticado'])):
        ?>
        <div class="notification is-danger">
            <p>ERRO: Usuário ou senha inválidos.</p>
        </div>
        <?php
            endif;
            unset($_SESSION['nao_autenticado']);
        ?>

        <form style="margin-left: 10px;" method="POST" action="login.php">

            <article>E-mail</article>
            <input required placeholder="you@example.com" type="email" class="lista" name="email" id="email">
            
            <article>Senha</article>
            <input required placeholder="Senha" type="password" minlength="6" class="lista" name="senha" id="senha" >

            <input id="botao" onclick="" type="submit" value="Confirmar">

            <a href="../index_escolha.html">Cadastrar-se</a>
        </form>

    </div>

    <script src="java.js"></script>
</body>
</html>