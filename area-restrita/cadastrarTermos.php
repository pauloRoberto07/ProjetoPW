
<!DOCTYPE html>
<html lang="pt">
<head>
  <title>Cadastrar Termos</title>
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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/admin.css">

</head>
<body style="background= white">
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
      <img src="../images/cadastro.png">
      
      <div class="btn-group">


      </div>
    </div>
    <form action="../termosInsert.php" method="post">
      <div class="title">
        <i class="fas fa-pencil-alt"></i> 
        <center>
         <h2 style="COLOR:#FFF">CADASTRAR TERMO</h2>
       </center>
     </div>
     <div class="info">
      <input class="fname" type="text" name="termo" id="termo" placeholder="Termo">
      <input type="text" name="descTermo" id="descTermo" placeholder="Descrição do Termo">
      <?php 
      if(isset($_SESSION['msg'])){
        echo ($_SESSION['msg']);
        unset($_SESSION['msg']);
      }
      ?>
    </div>

    <button type="submit" href="/"><b>CADASTRAR</b></button>
  </form>
</div>


</body>
</html>