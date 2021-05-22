<!DOCTYPE html>
<html lang="pt">
<!DOCTYPE html>
<html lang="pt">
  <head>
    <title>Cadatrar termos</title>
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
                <a href="#">Home</a>
              </li>
              <li>
                <a href="#">cadastrar termos</a>
              </li>
              <li>
                <a href="#">alterar termos</a>
              </li>
              <li>
                <a href="#">excluir termos</a>
              </li>
              
              <li>
                <a href="../logout.php">logout</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
<body>

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
        <input type="text" name="descTermo" id="descTermo">
        <br>
        <button type="submit">Cadastrar</button>
        </form>



</body>
</html>