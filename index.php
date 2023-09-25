<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Cadastro Pesca</title>
	<link rel="stylesheet" href="_CSS/Stilo.css">
</head>
<!--Parte de Login-->
<body>
<div id="corpo-form">
	<section>
		<img src="_Imagens/pescadorparafundo.jpg" >
	</section>
		
	<form  method="POST" action="validar.php">

		<input type="email" placeholder="usuário" required maxlength="40" name="email">
		<input type="password" placeholder="senha" maxlength="50" name="password">
		<input type="submit"  value="Acessar" name="">
		
	</form>


	<a href="registro.php"><input type="submit" value="Registro de Produção" name=""></a>

</div>
	
</body>
</html>