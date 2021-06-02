<?php
require_once 'global.php';
try{
	$termo = new Termo(); 
	
}
catch(PDOException $e){
	echo "Erro: ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<title>Página Inicial</title>
	<link rel="stylesheet" href="css/style.css" />
	<link rel="icon" type="image/png" href="images/logo.png"/>
	<link
	rel="stylesheet"
	href="css/responsive.css"
	media="screen and (max-width: 768px)"
	/>

	<meta name="viewport" content="width=device-width, initial-scale=1.0" >
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="css/print.css" media="print">
</head>
<body>
	<header>
		<div class="container">
			<img
			src="./images/logoheader.png"
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
							<a href="#termonav">Termos</a>
						</li>

						<li>
							<a href="#contato">Contato</a>
						</li>
						<li>
							<a href="./login.php">Admin</a>
						</li>
					</ul>
				</nav>
			</div>
		</div>
	</header>

	<section class="caixa hero">
		<div class="container">
			<div>
				<h2>
					Não tenha mais dúvida com termos técnicos, pesquise e iremos direto ao ponto e do jeito
					certo.
				</h2>
				<p>
					No meio de tanta informação e da quantidade de termos que
					temos nos sistemas e computadores, você precisa de alguém que te explique e mostre o significado deles.
					Pesquise com a gente!
				</p>

			</div>
			<img
			src="./images/herosectionimg.png"
			alt=""
			class="imgsectionhero image"
			/>
		</div>
	</section>

	<main  href="#" id="foo">
		<div class="container" id='termonav'>
			<form method="POST" action="index.php">
				<img src="images/iconelupa.png" class="iconsearch image2" style="opacity: 0" alt="Buscar"/>
				<input type="text" class="search" id="pesquisa" name="pesquisa" placeholder="Digite o termo que deseja pesquisar"/>
				<img src="images/iconelupa.png" class="iconsearch image2"  alt="Buscar"/>
			</div>	<br>
			<ul class="resultado"></ul>
			<?php
			if(isset($_POST['pesquisa'])){
				echo("
					<script>
					window.location.href='#foo';
					</script>"
				);
				$termoPesquisado = $_POST['pesquisa'];

				$listaTermo = $termo->procurar($termoPesquisado);
				foreach ($listaTermo as $linha) { 
					echo "<br>";
					echo "<center><h2>".$linha['nomeTermo']."</h2></center>"; 
					echo "<center><p>".$linha['descTermo']."</p></center>"; 
					echo "<br><br>";
				}
			}
			if(isset($_GET['id'])){
				echo("
					<script>
					window.location.href='#foo';
					</script>"
				);
				$termoPesquisado = $_GET['id'];
				$listaTermo = $termo->procurar($termoPesquisado);
				foreach ($listaTermo as $linha) { 
					echo "<br>";
					echo "<center><h2>".$linha['nomeTermo']."</h2></center>"; 
					echo "<center><p>".$linha['descTermo']."</p></center><br>"; 
					
				}
			}
			?>

			<input class="button" type="submit" name="envia" value="Pesquisar"/>
		</form>

		<br>


	</main>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>




	<section id="form" >
		<form action="" class="anime" id='contato'>
			<h3>Nos envie uma mensagem!</h3>
			<div class="form-group">
				<input class="input-control" placeholder="Nome" />

				<input type="email" class="input-control" placeholder="Email" />
			</div>

			<div class="form-group">
				<textarea name="textarea"
				rows="5" cols="30" class="input-control text-area"
				placeholder="Digite sua mensagem aqui"></textarea>
			</div>        

			<div class="form-group">
				<button type="submit" class="button">Enviar</button>

			</div>

		</form>
	</section>

	<script src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/personalizado.js"></script>
	<script src="js/anime.js"></script>
	<script src="js/scripts.js"></script>
	<script src="js/menu.js"></script>
</body>
</html>



<style type="text/css">

	.button{
		cursor: pointer;

	}
	.anime{
		opacity: 0;
		transition: 1.5s;
	}
	.anime-start {
		opacity: 1;
		transform: translate3d(0,0,0);
	}
	.caixa{
		animation-name: animacao;
		animation-duration: 3s;
	}


	@keyframes animacao {
		to  {
			opacity: 1;

		}
		from {
			opacity: 0;
			margin-right: 10%;
		}
	}

	::-webkit-scrollbar-track {
		background-color: #fff;
	}
	::-webkit-scrollbar {
		width: 3px;
		background: #061742;
	}
	::-webkit-scrollbar-thumb {
		background: #061742;
	}
</style>
<script type="text/javascript">
	$('nav ul li a[href^="#termonav"]').on('click', function(e) {
      e.preventDefault();
      var id = $(this).attr('href'),
      targetOffset = $(id).offset().top;
      
      $('html, body').animate({ 
        scrollTop: targetOffset - 100
      }, 1500);
    });
</script>
