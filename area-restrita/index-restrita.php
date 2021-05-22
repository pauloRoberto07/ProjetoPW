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
    <link rel="stylesheet" href="../css/print.css" media="print">
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

    <section class="hero">
      <div class="container">
        <div>
          <h2>
            kk Eae Ademir
          </h2>
          <p>
            vamo configurá?
          </p>
          
        </div>
        <img
          src="../images/herosectionimg.png"
          alt=""
          class="imgsectionhero image"
        />
      </div>
    </section>

    <main>

      <div class="container">
        <input type="text" class="search" placeholder="Digite o termo que deseja conferir"/>
        <img src="../images/iconelupa.png" class="iconsearch image2" alt="Buscar"/>
      </div>
      <br>
      <a href="#" class="button">Conferir</a>
    </main>
     

    


    <script src="../js/scripts.js"></script>
    <script src="../js/menu.js"></script>
  </body>
</html>
