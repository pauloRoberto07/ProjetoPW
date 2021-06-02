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
        $conexao= Conexao::pegarConexao();

        $stmt =$conexao->prepare("INSERT INTO tbtermo(nomeTermo, descTermo)
            VALUES(?,?)");
        

        $nomeTermo =  $Termo->getNomeTermo();
        $desc = $Termo->getDescTermo();
        

        $stmt->bindParam(1,$nomeTermo);
        $stmt->bindParam(2,$desc);

        $stmt->execute();


        return 'cadastro realizado com sucesso';
    }
    public function excluir($Termo){
        $conexao= Conexao::pegarConexao();
        $id= $Termo->getIdTermo();
        $stmt =$conexao->prepare("DELETE FROM tbtermo WHERE idTermo LIKE '$id'");
        $stmt->execute();
    }
     public function alterar($Termo){
        $conexao= Conexao::pegarConexao();
        $desctermo= $Termo->getDescTermo();
        $nometermo = $Termo->getNomeTermo();
        $id= $Termo->getIdTermo();
        $stmt =$conexao->prepare("UPDATE tbtermo SET descTermo ='$desctermo', nomeTermo ='$nometermo' WHERE idTermo LIKE '$id'");
        $stmt->execute();
    }
    public function procurar($procura){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT nomeTermo,descTermo FROM tbtermo WHERE nomeTermo LIKE '$procura%' ORDER BY nomeTermo ASC LIMIT 1";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function pegaDesc($descTermo){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT descTermo FROM tbtermo WHERE idTermo LIKE '$descTermo'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
    public function pegaNome($descTermo){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT nomeTermo FROM tbtermo WHERE idTermo LIKE '$descTermo'";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }
     public function listar(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT idTermo, nomeTermo, descTermo FROM tbtermo";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function fazJSON(){
        $conexao = Conexao::pegarConexao();
        $querySelect = "SELECT * FROM tbtermo";
        $resultado = $conexao->query($querySelect);
        $lista = $resultado->fetchAll();

      

        echo json_encode($lista, JSON_UNESCAPED_UNICODE);
    }

}

?>