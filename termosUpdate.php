<?php

require_once 'global.php';

try{

    header("Location: ./area-restrita/alterarTermos.php");
    $oTermo = new Termo();
    $desctermo = $_POST['descricaoTermo'];
    $nome = $_POST['nome'];
    $id = $_POST['codigoTermo'];
    $oTermo->setDescTermo($desctermo);
    $oTermo->setNomeTermo($nome);
    $oTermo->setIdTermo($id);
    session_start();
    $_SESSION['msg'] = " <center><H3 style='color: green;' >Termo Alterado Com Sucesso</H3></center>";
    echo($oTermo->alterar($oTermo));


}catch(Exception $e){
    echo '<pre>';
    print_r($e);
    echo '</pre';
    echo $e->getMessage();
}


?>