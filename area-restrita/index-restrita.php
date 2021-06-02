<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Página Inicial</title>
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
  <?php
      include_once('sentinela.php');
      
?>
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


    <div class="main-block">
      <div class="left-part">
        <i class="fas fa-graduation-cap"></i>
        
        <img src="../images/herosectionimg.png">
      
        <div class="btn-group">


        </div>
      </div>
  <form action="" method="post" onsubmit="return false">
  <h2 style="COLOR:#FFF">SELECIONE UMA DAS OPÇÕES QUE DESEJA:</h2>
  <BR>


  <button onclick="ir(1)">CADASTRAR TERMO</button>
        <BR>
        <BR>
        <BR>
        <button  onclick="ir(2)"> ALTERAR TERMO</button>
        <BR>
        <BR>
        <BR>
        <button  onclick="ir(3)"> EXCLUIR TERMO</button>
        <BR>
        <BR>
        <BR>
        <button  onclick="ir(4)"> FAZER LOGOUT </button>
      </form>


    <script src="../js/scripts.js"></script>
    <script src="../js/menu.js"></script>
    <script>

      function ir(nmr){

        if(nmr == 1){
        window.location.href = "./cadastrarTermos.php";

        }else if(nmr == 2){
        window.location.href = "./alterarTermos.php";

        }else if(nmr == 3){
          window.location.href = "./excluirTermos.php";
        }else{
          window.location.href =  "../logout.php"
        }
      }

    </script>
  
  
  </body>
</html>
