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
    <link rel="shortcut icon" href="imagens/Logo.png">
    <link rel="stylesheet" type="text/css" href="style_usuario.css">
</head>
<body>
<header class="cabecalho">
        <a href="../Index_YANA/pre-home.html"> 
        <img  class="cabecalho-imagem" src="imagens/logo.png" alt="Logo da Y.A.N.A."> 
        </a> 
        <div class="button-group" align="right">
            <a href="cadastro/index_escolha_chat.html" target="Principal"> <button class="button "><span>Chats</button></a>
            <a href="cadastro/login/logout.php"><span>Sair</button></a> 
        </div>
</header>    
<main class="conteudo">

    <div>
    <h2 style="color: white; text-align: center; font-family: 'Sarala', sans-serif;">Olá, <?php echo $_SESSION['nome'];?></h2>
        <h1 class="conteudo0">Seja Bem-Vindo ao Y.A.N.A.</h1>
        <p class="conteudo1">Chat disponivel!</p>
            <p class="conteudo1-1">Seja muito bem-vindo ao y.a.n.a.<br>Agora que você já se cadastrou em nossa plataforma que tal começar
               a desfrutar dela? <br>entre na ala de chats para poder conversar com um de nossos especialistas.
            </p>
            
    </div>

    <img class="conteudo_img" src="imagens/ilustração.webp" alt="">

    
            

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