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
				<li><a href="embarcacao.php" title="">Embarcação</li></a>
				<li><a href="consulta.php" title="">Consultas</li></a>
				
			</ul>
		</nav>
        <!--Essa é a segunda pagina -->
		<!--Pagina de cadastro do administrador -->
		<section>
			<h1> Cadastro Pescador </h1>
			<hr> <br><br>

			<form action="processaValidar.php" method="Post">
				Nome do Pescador <br>
				<input type="text" name="nomepescador" class="campo" maxlength="40"><br><br>
				Número do RGP do Pescador <br>
				<input type="text" name="numerorgp" class="campo"><br><br>
				Número de Cadastro na Colônia <br>
				<input type="text" name="cadastrocolonia" class="campo"><br><br>
			    Data de Nascimento <br>
				<input type="text" name="nascimentopescador" class="valor"><br><br>
				Sexo<br>
				<input type="text" name="sexo" class="valor"><br><br>
				 RG <br>
				<input type="text" name="RG" class="valor"><br><br>
				CPF <br>
				<input type="text" name="CPF" class="valor"><br><br>
				Endereço<br>
				<input type="text" name="endereco" class="campo"><br><br>
				Cidade<br>
				<input type="text" name="cidade" class="campo"><br><br>
				CEP <br>
				<input type="text" name="cep" class="valor"><br><br>
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