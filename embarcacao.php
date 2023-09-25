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
				<li><a href="validar.php" title="">Pescador</li></a>
				<li><a href="consulta.php" title="">Consultas</li></a>
				
			</ul>
		</nav>

		<section>
			
		<!-- Terceira pagina de cadstro -->	

			<h1> Cadastro Embarcação </h1>
			<hr> <br><br>

			
				
			<form action="processaBarco.php" method="Post">
				Nome da embarcação <br>
				<input type="text" name="nomedaembarcacao" class="campo"><br><br>
				Número de Cadastro na Marinha <br>
				<input type="text" name="cadastromarinha" class="campo"><br><br>
				Tamanho<br>
				<input type="text" name="tamanho" class="valor"><br><br>
				Material do Casco<br>
				<select name="casco" id="sel" type="text"  class="valor"  required><br><br>
        
                          <optgroup label="">
                          <option value="0" autofocus>selecione</option>
                          <option value="Mad">Madeira</option>
                          <option value="Fer">Ferro</option>
                          <option value="Fib">Fibra</option>
            
                         </optgroup>
                         </select><br><br>

				Ano de Fabricação <br>
				<input type="text" name="fabricacao" class="valor"><br><br>
				Potência do Motor <br>
				<input type="text" name="potencia" class="valor"><br><br>
				Local de Atuação <br>
				<input type="text" name="localatuacao" class="valor"><br><br>
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