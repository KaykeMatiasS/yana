<?php
    session_start();

    require_once 'conexao/perfilEspecialista.php';

    $u = new database;
    $u->conectar();

    $email_Esp = $_SESSION['email'];

    if($u->msgErro == ""){ 
        $especialista = $u->dados_especialista($email_Esp); 
    }else{
        echo("Erro ao conectar com o banco");
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="perfil.css">
    <title>Perfil do especialista</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
<body>
    <div class="container">
        <div class="card">
            <div 
                class="overlay d-none"> 
                <small class="fa fa-close"></small> 
                <?php 
                    if($especialista['Genero_Esp'] == "Masculino"){
                        ?><img src="images/imgMasculino.png"><?php
                    }else if($especialista['Genero_Esp'] == "Feminino"){
                        ?><img src="images/imgFeminino.png"><?php
                    }else{
                        ?><img src="images/imgOutros.png"><?php
                    }
                ?>"> 
            </div>
            <div class="upperborder"> </div>
            <it class="fa fa-plus"></it>
            <div class="image"> 
                <span>
                    <img id="userimage" 
                    src="
                        <?php 
                        if($especialista['Genero_Esp'] == "Masculino"){
                            echo("images/imgMasculino.png");
                        }else if($especialista['Genero_Esp'] == "Feminino"){
                            echo("images/imgFeminino.png");
                        }else{
                            echo("images/imgOutros.png");
                        }
                        ?>">
                </span> 
            </div>
            <div class="text">
                <h2>
                    <?php 
                        if($especialista["Nome_Social_Esp"] != ""){
                            echo $especialista['Nome_Social_Esp'];
                        }else{
                            echo $especialista['Nome_Esp'];
                        }
                    ?>
                </h2>
                <br>
                <h3>BIOGRAFIA</h3>
                <p style="font-size: 16px;"><?php echo $especialista["Biografia_Esp"]?></p>
                <br>
                <h3>CONTATO</h3>
                <p style="font-size: 16px;"><?php echo $especialista["Email_Esp"]?></p>
            </div>
            
        </div>
    </div>
    <script src="perfil.js"></script>
</body>
</html>