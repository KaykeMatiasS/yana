<?php
    include('config.php');

    Mysql::conectar();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="shortcut icon" href="Fotos/logo.png" type="image/x-icon">
    <title>Login</title>
</head>
<body>
    

    <div style="height: 350px;display: flex;flex-direction: column;align-items: center;justify-content: center;" id="bloco">
    <?php
            if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                $email = $_POST['Email_Usuario'];
                $senha = $_POST['Senha_Usuario'];

                if($email == ''){
                    FormEsp::alert('erro', 'Preencha o campo e-mail.');
                }else if($senha == ''){
                    FormEsp::alert('erro', 'Preencha o campo senha.');
                }
            }
                
    ?>
        
        <header style="margin-right: 40px;">Login</header>
        

        <form style="margin-left: 10px;" method="POST" action="">

         
            

            <article>E-mail</article>
            <input required placeholder="you@example.com" type="email" class="lista" name="email" id="email">
            


            <article>Senha</article>
            <input required placeholder="Senha" type="password" minlength="6" class="lista" name="email" id="senha" >



            <input id="botao" onclick="" type="submit" value="Confirmar">


            <a href="index_escolha.html">Cadastrar-se</a>
            
        
        </form>

        
        
    
    </div>

    <script src="java.js"></script>
</body>
</html>