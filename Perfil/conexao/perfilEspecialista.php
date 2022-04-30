<?php

class database
	{
	private $pdo; 
	public $msgErro = "";
	public function conectar()
	{
		global $pdo;
		try{
			$pdo = new PDO("mysql:dbname="."bd_yana".";host="."localhost", "root", "");
		} catch (PDOException $e){
		 	$msgErro = $e->getMessage();
		} 
	}

	public function dados_especialista($ID_Esp){
		global $pdo; 
		$sql = $pdo->prepare("SELECT * FROM `especialista` WHERE ID_Esp = :ID_Esp");
		$sql->bindValue(":ID_Esp", $ID_Esp);
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
