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
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="Fotos/logo.png" type="image/x-icon">
    <title>Cadastro</title>
</head>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<body>
    <div class="form_cd" id="bloco">

        <?php
            if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                $nome = $_POST['Nome_Esp'];
                $nome_social = $_POST['Nome_Social_Esp'];
                $cpf = $_POST['CPF_Esp'];
                $genero = $_POST['Genero_Esp'];
                $idade = $_POST['Idade_Esp'];
                $instituicao = $_POST['Instituicao'];
                $formacao = $_POST['Formacao_Academica'];
                $email = $_POST['Email_Esp'];
                $senha = $_POST['Senha_Esp'];
                $contato = $_POST['Contato_Esp'];
                $biografia = $_POST['Biografia_Esp'];

                if($nome == ''){
                    Form::alert('erro', 'Preencha o campo nome.');
                }else if($cpf == ''){
                    Form::alert('erro', 'Preencha o campo cpf.');
                }else if($genero == ''){
                    Form::alert('erro', 'Preencha o campo genero.');
                }else if($idade == ''){
                    Form::alert('erro', 'Preencha o campo idade.');
                }else if($instituicao == ''){
                    Form::alert('erro', 'Preencha o campo instituição.');
                }else if($formacao == ''){
                    Form::alert('erro', 'Preencha o campo formação.');
                }else if($email == ''){
                    Form::alert('erro', 'Preencha o campo email.');
                }else if($senha == ''){
                    Form::alert('erro', 'Preencha o campo senha.');
                }else if($contato == ''){
                    Form::alert('erro', 'Preencha o campo contato.');
                }
                else{
                    Form::cadastrar($nome, $nome_social, $cpf, $genero, $idade, $instituicao, $formacao, $email, $senha, $contato, $biografia);
                    Form::alert('sucesso','Cadastro realizado com sucesso.');
                }
            }

        ?>

        <header>Cadastro Especialista</header>
        <form method="post" action="">

            <article>Nome:</article>
            <input required placeholder="Nome" type="text" class="lista" name="Nome_Esp" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            <article>Nome Social:</article>
            <input placeholder="Nome Social" type="text" class="lista" name="Nome_Social_Esp" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            <article>CPF:</article>
            <input required placeholder="999.999.999-99" type="text" class="lista" name="CPF_Esp" >
            
            <article>Gênero:</article>
            <div>
                <input checked type="radio" name="Genero_Esp" id="masculino" value="Masculino">
                <label for="masculino">Masculino</label>

                <input type="radio" name="Genero_Esp" id="feminino" value="Feminino">
               <label for="feminino">Feminino</label> 

               <input type="radio" name="Genero_Esp" id="feminino" value="Outros">
               <label for="outros">Outros</label> 
            </div>
                       
            <article>Idade:</article>
            <input required placeholder="Idade" type="number" class="lista" name="Idade_Esp" maxlength="2" min="10" max="99"  >

            <article>Instituição:</article>
            <input required placeholder="Instituição" type="text"  class="lista"  name="Instituicao" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">


            <article>Formação Academica:</article>
            <input  required placeholder="Formação Academica " type="text"  class="lista"  name="Formacao_Academica" pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            
            <article>Email:</article>
            <input required placeholder="E-mail" type="email" class="lista" name="Email_Esp">


            <article>Senha:</article>
            <input required placeholder="Senha" type="password" name="Senha_Esp" minlength="6">


            <article>Contato:</article>
            <input required placeholder="Telefone" ype="number" class="lista" name="Contato_Esp"  pattern="[0-9]+$">
            

            <article>Biografia:</article>
            <input type="text" name="Biografia_Esp" id="bio" >
            
            <input id="botao" name="acao"  type="submit" value="Confirmar">
            <input name="form"  type="hidden" value="f_form">
        
        </form>

        
        
    
    </div>

    
</body>
</html>
