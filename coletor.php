
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="_CSS/Styllo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<li><a href="index.php" title="">Login</li></a>
			</ul>
		</nav>
		<!-- Essa pagina é a de registro do vistoriador-->
		<section>
			<h1> Registro </h1>
			<hr> <br><br>

			<form action="pescadores.php" method="Post">
				Nome do Pescador <br>
				<input type="text" name="nome" class="campo" maxlength="40" autofocus><br><br>
				Nome da Embarcação <br>
				<input type="text" name="embarcacao" class="campo"><br><br>
				Quantidade de Peixe <br>
				<input type="text" name="quantidade" class="campo"><br><br>
				Principal Especie <br>
				<input type="text" name="especie" class="campo"><br><br>
				Valor Médio por KG <br>
				<input type="text" name="valor" class="valor"><br><br>
				Data da Produção <br>
				<input type="text" name="dataprodcao" class="valor"><br><br>
				Destino da Produção <br>
				<input type="text" name="destino" class="campo"><br><br><br>

				<input type="submit" value="Registrar" class="btn">


				
			</form>
		</section>
		
	</div>
</body>
</html>