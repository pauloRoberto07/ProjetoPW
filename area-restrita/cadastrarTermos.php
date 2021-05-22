
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


        <form action="../termosInsert.php" method="post">
        
        <label>
        Termo: 
        </label>
        <input type="text" name="termo" id="termo">
        <br>
        <br>
        <label>
        Descrição do termo:
        </label>
        <textarea name="descTermo" id="descTermo" cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Cadastrar</button>
        </form>



</body>
</html>