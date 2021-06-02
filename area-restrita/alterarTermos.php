<?php
include('../Classes/Termo.php');

try{
  $termo = new Termo(); 
  $listaTermo = $termo->listar();
  $id="";
  $aux="";

}
catch(Exception $e){
  echo '<pre>';
  print_r($e);
  echo '<pre>';
  echo $e->getMessage();
}
?>
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
  <link rel="icon" type="image/png" href="../images/logo.png"/>
  <link rel="stylesheet" href="../css/print.css" media="print">
  <link rel="stylesheet" href="../css/admin.css">


  
</head>
<body>
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
  <center>
    <br>

    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        <img src="../images/alterar.png">

        <div class="btn-group">


        </div>
      </div>
      <form action="alterarTermos.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <center>
            <h2 style="COLOR:#FFF">ALTERAR TERMO</h2>
          </center>
        </div>
        <div class="info">
          <select class="jumper" name='termo'>
            <option value="course-type" selected>Selecionar Termo</option>




            <option disabled selected> Termo Alterar</option>
            <?php foreach ($listaTermo as $linha) { ?>
              <option value= <?php echo $linha['idTermo'] ?> >
                <?php echo $linha['nomeTermo'] ?>
                </option> <?php }?>
              </select>


              <?php 

              ?>
              <?php
              if(isset($_POST['termo'])){
               $aux='true';
               if($aux =='true'){
                echo "<center>
                <button type='submit'><b>ALTERAR</b></button>
                </center>";
              }
              $cod=$_POST['termo'];
              $la = $termo->pegaDesc($_POST['termo']);
              foreach ($la as $linha) {
                $id = $linha['descTermo'];
                $termo->aux = ($_POST['termo']);
              }
              $la2 = $termo->pegaNome($_POST['termo']);
              foreach ($la2 as $linha) {
                $nome = $linha['nomeTermo'];
              }

              echo "<br><br></form>
              <form action='../termosUpdate.php' method='post'>";
              echo "
              <label>
              ID Do Termo: 
              </label>
              <input type='text' name='codigoTermo' id='codigoTermo' readonly='readonly' value=$cod>
              <br>
              <br>
              Nome Do Termo: 
              <label>
              <input type='text' name='nome' id='nome' value='$nome'>
              <br>
              <br>
              </label>
              <label>
              Descrição do termo:
              </label>
              
              <input type='text' name='descricaoTermo' id='descricaoTermo' > <br> DESCRIÇÃO ANTIGA: $id</textarea>
              <br>";
              echo "<center>";
              echo "<button type='submit'><b>ALTERAR</b></button>";
              echo "</center>";
            }
            else{
             if(isset($_SESSION['msg'])){
              echo ($_SESSION['msg']);
              unset($_SESSION['msg']);
            }
            echo "<center>";
            echo "<button type='submit'><b>ALTERAR</b></button>";
            echo "</center>";

          }
          ?>




        </div>
      </form>
    </center>
  </body>
  </html>
