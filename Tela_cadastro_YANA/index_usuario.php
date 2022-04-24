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

            <article>Apelido:</article>
            <input required placeholder="Usuario" type="text" class="lista" name="" id=""  pattern="^[a-zA-Z\s]+$">


            <article>CPF:</article>
            <input required placeholder="999.999.999-99" type="text" class="lista" name="" id="cpf" >


            <article>Pronome:</article>
            <div>
                <input  type="radio" name="sexo" id="masculino" value="Masculino">
                <label for="Masculino">Ele/Dele</label>

                <input type="radio" name="sexo" id="Feminino" value="Feminino">
                <label for="Feminino">Ela/Dela</label>


                <input type="radio" name="sexo" id="Neutro" value="Neutro">
                <label for="Neutro">Elu/Delu</label>
            </div>
           
            
               
           

            <article>Idade:</article>
            <input required placeholder="Idade" type="number" class="lista" name="" maxlength="2" min="10" max="99" id="" pattern="[1-9]+$">

            
            <article>Email:</article>
            <input required placeholder="You@example.com" type="E-mail" class="lista" name="" id="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">


            <article>Senha</article>
            <input required placeholder="Senha" type="password" minlength="6" class="lista" name="" id="" >



            <input id="botao" onclick="" type="submit" value="Confirmar">
            
        
        </form>

        
        
    
    </div>

    <script src="java.js"></script>
    
</body>
</html>