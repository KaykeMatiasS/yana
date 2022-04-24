<?php
    class form{
        public static function alert($tipo, $mensagem){
            if($tipo == 'erro'){
                // echo '<div style="color:red; font-size25px; >'.$mensagem.'</div>';
                echo $mensagem;
                return false;
            }
            else if($tipo == 'sucesso'){
                // echo '<div style="color:green; font-size25px; >'.$mensagem.'</div>';
                echo $mensagem;
                return true;
            }
        }

        public static function cadastrar($nome, $nome_social, $cpf, $genero, $idade, $instituicao, $formacao, $email, $senha, $contato, $biografia){
            $sql = Mysql::conectar()->prepare("INSERT INTO `especialista`(Nome_Esp, Nome_Social_Esp, CPF_Esp, Genero_Esp, Idade_Esp, Instituicao, Formacao_Academica, Email_Esp, Senha_Esp, Contato_Esp, Biografia_Esp) VALUES(?,?,?,?,?,?,?,?,?,?,?)");
            $sql->execute(array($nome, $nome_social, $cpf, $genero, $idade, $instituicao, $formacao, $email, $senha, $contato, $biografia));
        }
    }
?>