<?php
include('../Classes/Termo.php');
try{
  $termo = new Termo(); 
  $listaTermo = $termo->listar();
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
  <title>Excluir Termos</title>
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
        <img src="../images/delete.png">
        
      </div>

      <form action="../termosDrop.php" method="post">
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <center>
            <h2 style="COLOR:#FFF">EXCLUIR TERMO</h2>
          </center>
        </div>
        <div class="info">
          <select class="jumper" name='termo'>
            <option value="course-type" selected>Selecionar Termo</option>
            <?php foreach ($listaTermo as $linha) { ?>
              <option value= <?php echo $linha['idTermo'] ?> >
                <?php echo $linha['nomeTermo'] ?>
                </option> <?php }?>
              </select><br>
              <?php 
              if(isset($_SESSION['msg'])){
                echo ($_SESSION['msg']);
                unset($_SESSION['msg']);
              }
              ?>
              <p class="button" style="background:#f7c004" id="myBtn">EXCLUIR</p>
              <div id="myModal" class="modal">
                <div class="modal-content">
                  <span class="close">&times;</span>
                  <p style="color: black"><b>Deseja Realmente Excluir ?</b></p>
                  <center>
                    <button type="submit" id="corum">EXCLUIR</button>
                  </center>
                </div>
              </div>
            </div>
          </form>
        </center>
        
      </body>
      </html>

      <style>
        body {font-family: Arial, Helvetica, sans-serif;}

        /* The Modal (background) */
        .modal {
          display: none; /* Hidden by default */
          position: fixed; /* Stay in place */
          z-index: 1; /* Sit on top */
          padding-top: 100px; /* Location of the box */
          left: 0;
          top: 0;
          width: 100%; /* Full width */
          height: 100%; /* Full height */
          overflow: auto; /* Enable scroll if needed */
          background-color: rgb(0,0,0); /* Fallback color */
          background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content */
        .modal-content {
          background-color: #fefefe;
          margin: auto;
          padding: 20px;
          border: 1px solid #888;
          width: 80%;
        }

        /* The Close Button */
        .close {
          color: #aaaaaa;
          float: right;
          font-size: 28px;
          font-weight: bold;
        }

        .close:hover,
        .close:focus {
          color: #000;
          text-decoration: none;
          cursor: pointer;
        }
        .button{
          background: red;
          width: 25%;
          cursor: pointer;
        }
      </style>



      <script>

        var modal = document.getElementById("myModal");
        var btn = document.getElementById("myBtn");
        var span = document.getElementsByClassName("close")[0];

        btn.onclick = function() {
          modal.style.display = "block";
        }
        span.onclick = function() {
          modal.style.display = "none";
        }

        window.onclick = function(event) {
          if (event.target == modal) {
            modal.style.display = "none";
          }
        }

      </script>