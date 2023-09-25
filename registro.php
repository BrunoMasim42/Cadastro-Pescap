<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Embarcação</title>
	<link rel="stylesheet" href="_CSS/Styllo.css">
	
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<li><a href="index.php" title="">Login</li></a>
				
				
			</ul>
		</nav>

		<section>
			
		<!-- Terceira pagina de cadstro -->	

			<h1> Cadastro Embarcação </h1>
			<hr> <br><br>

			
				
			<form action="processaRegistro.php" method="Post">
				Nome <br>
				<input type="text" name="nome" class="campo"><br><br>
				Nome da embarcação <br>
				<input type="text" name="embarcacao" class="campo"><br><br>
				Quantidade em Kg<br>
				<input type="text" name="quantidade" class="valor"><br><br>
				Especie de Pescado<br>
				<input type="text" name="especie" class="valor"><br><br>
                Valor do KG <br>
				<input type="text" name="valor" class="valor"><br><br>
				Data da Pesca <br>
				<input type="text" name="dataprodcao" class="valor"><br><br>
				Destino da entrega <br>
				<input type="text" name="destinoproducao" class="valor"><br><br><BR><BR>

				<input type="submit" value="Cadastrar" class="btn">

				

                </form>

				
		</section>
		
	</div>
</body>
</html>