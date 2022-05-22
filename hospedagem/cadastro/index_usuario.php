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
    <title>Cadastro</title>
</head>

<body>
    <div class="FormUsu_cd" id="bloco">
        <?php
            if(isset($_POST['acao']) && $_POST['form'] == 'f_form'){
                $apelido = $_POST['Apelido_Usuario'];
                $cpf = $_POST['CPF_Usuario'];
                $pronomes = $_POST['Pronomes'];
                $email = $_POST['Email_Usuario'];
                $senha = $_POST['Senha_Usuario'];


                if($apelido == ''){
                    FormUsu::alert('erro', 'Preencha o campo apelido.');
                }else if($cpf == ''){
                    FormUsu::alert('erro', 'Preencha o campo cpf.');
                }else if($pronomes == ''){
                    FormUsu::alert('erro', 'Preencha o campo pronomes.');
                }else if($email == ''){
                    FormUsu::alert('erro', 'Preencha o campo email.');
                }else if($senha == ''){
                    FormUsu::alert('erro', 'Preencha o campo senha.');
                }else{
                    FormUsu::cadastrar($apelido, $cpf, $pronomes, $email, $senha);
                    FormUsu::alert('sucesso','Cadastro realizado com sucesso.');

                    header('Location: ../index_usuario.php');
                }
            }

        ?>
        <header>Cadastro Usuário</header>

        <form method="POST" action="">

            <article>Apelido:</article>
            <input required placeholder="Digite um apelido bacana" type="text" class="lista" name="Apelido_Usuario" id="" pattern="^[a-zA-Z\s]+$">

            <article>CPF:</article>
            <input required placeholder="999.999.999-99" type="text" class="lista" name="CPF_Usuario" id="CPF">

            <article>Pronome:</article>
            <div>
                <input type="radio" name="Pronomes" id="masculino" value="Ele/Dele">
                <label for="Ele/Dele">Ele/Dele</label>

                <input type="radio" name="Pronomes" id="Feminino" value="Ela/Dela">
                <label for="Ela/Dela">Ela/Dela</label>

                <input checked type="radio" name="Pronomes" id="Neutro" value="Elu/Delu">
                <label for="Elu/Delu">Elu/Delu</label>
            </div>

            <article>Email:</article>
            <input required placeholder="You@example.com" type="E-mail" class="lista" name="Email_Usuario" id=""
                pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$">

            <article>Senha</article>
            <input required placeholder="Senha" type="password" minlength="6" class="lista" name="Senha_Usuario" id="">

            <input id="botao" name="acao" onclick="" type="submit" value="Confirmar">
            <input name="form" type="hidden" value="f_form">

        </form>
    </div>
    <script>
          const cpf = document.querySelector("#CPF") 

cpf.addEventListener("keyup", event => {
    let start = cpf.selectionStart 
    let end = cpf.selectionEnd 
    
    if(start == end) { 
        formMask("___.___.___-__", "_", event, start);
    }
})

function formMask(mask, char, event, cursor) {
    
    const vetMask = mask.split("") 
    const onlyNumbers = cpf.value.split("").filter(value => !isNaN(value) && value != " ")
    const key = event.keyCode || event.which
    const backspaceAndArrowKeys = [8, 37, 38, 39, 40] 
    const clickedOnTheBackspaceOrArrowsKeys = backspaceAndArrowKeys.indexOf(key) >= 0
    const charNoMod = [".", "-"] 
    const cursorIsCloseToCharNoMod = charNoMod.indexOf(vetMask[cursor]) >= 0

    onlyNumbers.forEach( (value) => vetMask.splice(vetMask.indexOf(char), 1, value)) 

    cpf.value = vetMask.join("")

    if(!clickedOnTheBackspaceOrArrowsKeys && cursorIsCloseToCharNoMod) {
        cpf.setSelectionRange(cursor+1, cursor+1)
    } else {
        cpf.setSelectionRange(cursor, cursor)
    }

  
}
    </script>
</body>
</html>