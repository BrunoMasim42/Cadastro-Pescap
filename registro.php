<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Embarcação</title>
	<link rel="stylesheet" href="_CSS/Styllo.css">
	<style>
	    *{
	margin: 0px;
	padding: 0px;
}

body{
	font-family: verdana;
	font-size: 100%;
}

.container{
	margin: auto;
	width: 1200px;
	margin-top: 20px;
}

nav{
	width: 300px;
	height: 400px;
	background-color: aliceblue;
	float: left;
	box-sizing: border-box;
	padding: 10px;

}

section{
	width: 700px;
	height: 1500px;
	margin-left: 10px;
	float: left;
	background-color: ghostwhite;
}

h1{
	font-family: verdana;
	font-size: 16pt;
	margin-left: 150px;
	margin-top: 20px;
	
}

ul.menu{
	list-style-type: none;
}

ul.menu li{
	width: 100px;
	height: 30px;
	line-height: 30px;
	margin-top: 10px;
}

a{
	text-decoration: none;
	color: grey;
	padding: 5px;
	font-size: 20px;
}

form{
	margin-left: 20px;
}

.campo{
	width: 400px;
	height: 30px;
	outline: none;
	border: 1px solid #ddd;
}

.valor{
	height: 30px;
	border: 1px solid #ddd;
}

.btn{
	width: 100px;
	height: 30px;
	border: 1px solid #ddd;
	margin-left: 200px;
	cursor: pointer;
}

article{
	width: 100%;
	box-sizing: border-box;
	padding: 10px;
	background-color: #d6d5d5;
	margin-bottom: 5px;


}
	</style>
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