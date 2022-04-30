<?php
    require_once 'conexao/perfilEspecialista.php';

    $u = new database;
    $u->conectar();

    $ID_Esp = "16";

    if($u->msgErro == ""){ 
        $especialista = $u->dados_especialista($ID_Esp); 
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
            <div class="overlay d-none"> <small class="fa fa-close"></small> <img src="https://imgur.com/SSCE2Uj.jpg"> </div>
            <div class="upperborder"> </div>
            <it class="fa fa-plus"></it>
            <div class="image"> <span><img id="userimage" src="https://imgur.com/SSCE2Uj.jpg"></span> </div>
            <div class="text">
                <h3>
                    <?php 
                        if($especialista["Nome_Social_Esp"] != ""){
                            echo $especialista['Nome_Social_Esp'];
                        }else{
                            echo $especialista['Nome_Esp'];
                        }
                    ?>
                </h3>
                <p><?php echo $especialista["Biografia_Esp"]?></p>
            </div>
            <div class="bottom">
                <div class="social"> 
                    <i class="fa fa-facebook-f"></i> 
                    <i class="fa fa-envelope-o"></i></a>
                    <i class="fa fa-linkedin"></i> 
                    <i class="fa fa-dribbble"></i> </div>
            </div>
        </div>
    </div>
    <script src="perfil.js"></script>
</body>
</html>