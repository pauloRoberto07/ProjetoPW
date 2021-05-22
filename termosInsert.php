<?php

require_once 'global.php';

try{

    header("Location: ./area-restrita/cadastrarTermos.php");
    $oTermo = new Termo();

    $termo = $_POST['termo'];
    $desc = $_POST['descTermo'];

    $oTermo->setNomeTermo($termo);
    $oTermo->setDescTermo($desc);

    echo($oTermo->cadastrar($oTermo));


}catch(Exception $e){
    echo '<pre>';
        print_r($e);
    echo '</pre';
    echo $e->getMessage();
}


?>