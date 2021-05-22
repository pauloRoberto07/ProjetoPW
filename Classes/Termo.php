<?php 

require_once('Conexao.php');
class Termo{

    private $idTermo;
    private $nomeTermo;
    private $descTermo;
    
    
    public function getIdTermo()
    {
        return $this->idTermo;
    }

   
    public function setIdTermo($idTermo)
    {
        $this->idTermo = $idTermo;

        return $this;
    }
 
    public function getNomeTermo()
    {
        return $this->nomeTermo;
    }

   
    public function setNomeTermo($nomeTermo)
    {
        $this->nomeTermo = $nomeTermo;

        return $this;
    }

  
    public function getDescTermo()
    {
        return $this->descTermo;
    }

    
    public function setDescTermo($descTermo)
    {
        $this->descTermo = $descTermo;

        return $this;
    }


    public function cadastrar($Termo){
        $conexao= Conexao :: pegarConexao();
       
        $stmt =$conexao->prepare("INSERT INTO tbtermo(nomeTermo, descTermo)
        VALUES(?,?)");
        

        $nomeTermo =  $Termo->getNomeTermo();
        $desc = $Termo->getDescTermo();
        

        $stmt->bindParam(1,$nomeTermo);
        $stmt->bindParam(2,$desc);
       
        $stmt->execute();

      
        return 'cadastro realizado com sucesso';
    }

    public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "Select nomeTermo, descTermo FROM tbtermo";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

}

?>