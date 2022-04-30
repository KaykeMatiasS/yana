<?php
	try {
		$dns = "mysql:dbname=chat;host=localhost";
		$user = "root";
		$pass = "";
		$pdo = new PDO($dns, $user, $pass);
	}catch (PDOException $e){
		echo "Falha: ". $e->getMessage();
	}



?>