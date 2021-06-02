<style type="text/css">
	a{
		text-decoration: none;
		
	}

	ul{
		list-style:none;
	}
</style>
<?php
//Incluir a conexão com banco de dados
$conn = mysqli_connect("localhost","root","","bdtermos");


$termos = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$resultado = "SELECT nomeTermo FROM tbtermo WHERE nomeTermo LIKE '%$termos%' LIMIT 3";
$resultado2 = mysqli_query($conn, $resultado);



if(($resultado2) AND ($resultado2->num_rows != 0 )){
	while($row = mysqli_fetch_assoc($resultado2)){
		echo "<li><a href='?id=$row[nomeTermo]'>$row[nomeTermo]</a></li>";
	}
}?>