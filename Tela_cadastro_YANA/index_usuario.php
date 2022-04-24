<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_usuario.css">
    <link rel="shortcut icon" href="Fotos/logo.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<body>




    <div id="bloco">

        <header>Cadastro Usuário</header>

        <form method="POST" action="">

            <article>Nome:</article>
            <input required placeholder="Nome" type="text" class="lista" name="" id=""  pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">


            <article>CPF:</article>
            <input  placeholder="999.999.999-99" type="text" class="lista" name="" id="CPF" >


            <article>Sexo:</article>
            <div>
                <input checked type="radio" name="sexo" id="masculino" value="Masculino">
                <label for="masculino">Masculino</label>
            </div>
           
            <div>
               <input type="radio" name="sexo" id="feminino" value="Feminino">
               <label for="feminino">Feminino</label> 
            </div>
           


            <article>Idade:</article>
            <input required placeholder="Idade" type="number" class="lista" name="" maxlength="2" min="10" max="99" id="" pattern="[1-9]+$">

            
            <article>Email:</article>
            <input required placeholder="Email" type="E-mail" class="lista" name="" id="">


            <article>Senha</article>
            <input required placeholder="Senha" type="password" minlength="6" class="lista" name="" id="" >



            <input id="botao" onclick="" type="submit" value="Confirmar">
            
        
        </form>

        
        
    
    </div>

    
</body>
</html>