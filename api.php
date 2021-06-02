<?php
require_once 'global.php';
try{
	$termo = new Termo(); 
	
    $termo->fazJSON();
}
catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}
?>