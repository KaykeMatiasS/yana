<?php
include("bd_conect.php");
$sql = $pdo->query("SELECT * FROM chat1");
foreach ($sql->fetchAll() as $key) {
	
	echo "<h5>".$key['mensagem']."</h5>";
}

?>