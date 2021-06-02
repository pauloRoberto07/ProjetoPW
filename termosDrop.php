<?php

require_once 'global.php';

try{

	header("Location: ./area-restrita/excluirTermos.php");
	$oTermo = new Termo();

	$termo = $_POST['termo'];
	$oTermo->setIdTermo($termo);
	session_start();
	  $_SESSION['msg'] = "<center><H3 style='color: green;' >Termo Excluido Com Sucesso</H3></center>";

	echo($oTermo->excluir($oTermo));


}catch(Exception $e){
	echo '<pre>';
	print_r($e);
	echo '</pre';
	echo $e->getMessage();
}


?>