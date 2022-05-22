<?php
    include('../cadastro/login/verifica_login.php');
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Y.A.N.A.</title>
    <link rel="stylesheet" type="text/css" href="style_especialista.css">
    <link rel="shortcut icon" href="imagens/Logo.png">
</head>
<body>
<header class="cabecalho">
        <a href="../Index_YANA/pre-home.html"> 
        <img  class="cabecalho-imagem" src="imagens/logo.png" alt="Logo da Y.A.N.A."> 
        </a> 
        <div class="button-group" align="center">											
            <a href="cadastro/index_escolha_chat.html" target="Principal"> <button class="button"><span>Chats</button></a> 
            <a href="Perfil/perfil.php" target="Principal"> <button class="button "><span>Perfil</button></a>
            <a href="cadastro/login/logout.php"> <button class="button"><span>Sair</button></a> 
        </div>
</header>    
<main class="conteudo">

    <div>
    <h2 style="color: white; text-align: center; font-family: 'Sarala', sans-serif;">Olá, <?php echo $_SESSION['nome'];?></h2>
    <h1>Bem Vindo ao YANA</h1>

    <p style="text-align:center">Agora você tem acesso a o chat e ao seu perfil.</p>

    <p style="text-align: center;">Agora você podera acessar o chat para realizar apoio emocional as todas pessoas que querem e precisam conversar, atendendo de forma voluntária e gratuitamente </p>

    </div>
    
    
    <div style="padding: 10px;">
        <img id="conteudo_img" src="imagens/apoio.jpg" alt="">
    </div>
    
    

</main>
<footer class="rodape">
    <div class="imagens">
        <a target="blank" href="//instagram.com/projeto_yna?igshid=YmMyMTA2M2Y="><img src="imagens/icone2.png" class="link-imagem" alt="link do nosso instagram"></a>
        <a target="blank" href="//twitter.com/ProjetoYana"><img src="imagens/icone1.png" class="link-imagem" alt="link do nosso twiiter"></a>
    </div>
        <section class="alinhamento">
    <div class="cor">
        <p>Remember you are not alone</p>
    </div>
    </section>
</footer>
    
</body>
</html>