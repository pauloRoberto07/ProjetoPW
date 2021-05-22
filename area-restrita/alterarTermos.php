
<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Alterar Termos</title>
    <link rel="stylesheet" href="../css/style.css" />
    <link
      rel="stylesheet"
      href="../css/responsive.css"
      media="screen and (max-width: 768px)"
    />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" >
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" href="../css/print.css" media="print">
  </head>
  <?php include_once('sentinela.php');?>

<header>
<div class="container">
    <img
    src="../images/logoheader.png"
    alt="Rocketseat"
    />
    <div class="menu-section">
    <div class="menu-toggle">
        <div class="one"></div>
        <div class="two"></div>
        <div class="three"></div>
    </div>
    <nav>
        <ul>
        <li>
            <a href="./index-restrita.php">Home</a>
        </li>
        <li>
            <a href="./cadastrarTermos.php">cadastrar termos</a>
        </li>
        <li>
            <a href="./alterarTermos.php">alterar termos</a>
        </li>
        <li>
            <a href="./excluirTermos.php">excluir termos</a>
        </li>
        
        <li>
            <a href="../logout.php">logout</a>
        </li>
        </ul>
    </nav>
    </div>
</div>
</header>
    <?php
        require_once '../Classes/Termo.php';
    ?>
     <?php
    
    try{

        $termo = new Termo();
        $listarTermos = $termo->listar();
    }catch(Exception $e){
        echo '<pre>';
            print_r($e);
        echo '</pre>';
        echo $e->getMessage();
    }
    ?>
      
      <?php foreach($listarTermos as $lista){?>

       
        <?php echo '<h1> Termo: ' . $lista['nomeTermo'] . '</h1>'?>
        <p class="card-text">Descrição termo: <?php
        
        
            
           echo $lista['descTermo'];

        }
    ?>
        <br>
        
       
        











</body>
</html>