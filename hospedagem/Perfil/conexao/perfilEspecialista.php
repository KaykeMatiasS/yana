<?php

class database
	{
	private $pdo; 
	public $msgErro = "";
	public function conectar()
	{
		global $pdo;
		try{
			$pdo = new PDO("mysql:dbname="."heroku_ebd1ca9ecd5833f".";host="."us-cdbr-east-05.cleardb.net", "b49c19c614f020", "85a2c26e");
		} catch (PDOException $e){
		 	$msgErro = $e->getMessage();
		} 
	}

	public function dados_especialista($email_Esp){
		global $pdo; 
		$sql = $pdo->prepare("SELECT * FROM `especialista` WHERE Email_Esp = :Email_Esp");
		$sql->bindValue(":Email_Esp", $email_Esp);
		$sql->execute();
		$lista = $sql->fetch();
		if($sql->rowCount() > 0){		
				return $lista;
		}else{
			return false;
		}
	}
}
?>
