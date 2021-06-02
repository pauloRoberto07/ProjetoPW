
<?php

require_once 'global.php';

try{

    header("Location: ./area-restrita/cadastrarTermos.php");
    $oTermo = new Termo();
    session_start();
    $termo = $_POST['termo'];
    $desc = $_POST['descTermo'];
    if($termo!="" && $desc!=""){
        $oTermo->setNomeTermo($termo);
        $oTermo->setDescTermo($desc);
        echo($oTermo->cadastrar($oTermo));
        $_SESSION['msg'] = "<center><H2 style='color: green;' >Novo Termo Cadastrado Com Sucesso</H2></center>";
    }
    else{
        $_SESSION['msg'] = "<center><H2 style='color: red;' >Falha Ao Tentar Cadastrar Novo Termo</H2></center>";

    }


}catch(Exception $e){
    echo '<pre>';
    print_r($e);
    echo '</pre';
    echo $e->getMessage();
}


?>