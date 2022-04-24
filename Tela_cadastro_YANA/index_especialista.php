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

<body>
    <div class="FormEsp_cd" id="bloco">

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
                    FormEsp::alert('erro', 'Preencha o campo nome.');
                }else if($cpf == ''){
                    FormEsp::alert('erro', 'Preencha o campo cpf.');
                }else if($genero == ''){
                    FormEsp::alert('erro', 'Preencha o campo genero.');
                }else if($idade == ''){
                    FormEsp::alert('erro', 'Preencha o campo idade.');
                }else if($instituicao == ''){
                    FormEsp::alert('erro', 'Preencha o campo instituição.');
                }else if($formacao == ''){
                    FormEsp::alert('erro', 'Preencha o campo formação.');
                }else if($email == ''){
                    FormEsp::alert('erro', 'Preencha o campo email.');
                }else if($senha == ''){
                    FormEsp::alert('erro', 'Preencha o campo senha.');
                }else if($contato == ''){
                    FormEsp::alert('erro', 'Preencha o campo contato.');
                }
                else{
                    FormEsp::cadastrar($nome, $nome_social, $cpf, $genero, $idade, $instituicao, $formacao, $email, $senha, $contato, $biografia);
                    FormEsp::alert('sucesso','Cadastro realizado com sucesso.');
                }
            }

        ?>

        <header>Cadastro Especialista</header>
        <form method="post" action="">

            <article>Nome:</article>
            <input required placeholder="Nome" type="text" class="lista" name="Nome_Esp"
                pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            <article>Nome Social:</article>
            <input placeholder="Nome Social" type="text" class="lista" name="Nome_Social_Esp"
                pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">

            <article>CPF:</article>
            <input required placeholder="999.999.999-99"  type="text" class="lista" name="CPF_Esp" id="CPF_Esp" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" \
			title="Digite um CPF no formato: xxx.xxx.xxx-xx">


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
            <input required placeholder="Idade" type="number" class="lista" name="Idade_Esp" maxlength="2" min="10"
                max="99">

            <article>Instituição:</article>
            <input required placeholder="Instituição" type="text" class="lista" name="Instituicao"
                pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">


            <article>Formação Academica:</article>
            <input required placeholder="Formação Academica " type="text" class="lista" name="Formacao_Academica"
                pattern="[A-Za-záàâãéèêíïóôõöúçñÁÀÂÃÉÈÍÏÓÔÕÖÚÇÑ]+$">


            <article>Email:</article>
            <input required placeholder="E-mail" type="email" class="lista" name="Email_Esp">


            <article>Senha:</article>
            <input required placeholder="Senha" type="password" name="Senha_Esp" minlength="6">


            <article>Contato:</article>
            <input required placeholder="(11) 99999-9999" type="text" class="lista" name="Contato_Esp" id="Contato_Esp"  pattern="(\d{2})\d{5}-\d{4}"  maxlength="11">


            <article>Biografia:</article>
            <input type="text" name="Biografia_Esp" id="bio">

            <input id="botao" name="acao" type="submit" value="Confirmar">
            <input name="form" type="hidden" value="f_form">

        </form>
    </div>
    <script src="java.js"></script>
</body>
</html>