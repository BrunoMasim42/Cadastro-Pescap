
<?php include_once "conexao.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consulta</title>
	<link rel="stylesheet" href="_CSS/Styllo.css">
</head>
<body>
	<div class="container">
		<nav>
			<ul class="menu">
				<li><a href="index.php" title="">Login</li></a>
                <li><a href="validar.php" title=""> Pescador</li></a>
			</ul>
		</nav>
		<!-- Pagina da Busca-->
		<section>
			<h1> Consulta </h1>
			<hr> <br><br>

			<center class="busca">
        <div class="form-grup">
            <form method="POST" action="">
                <input type="text" class="campo2" name="busca" placeholder="Encontre aqui" id="busca">
                <input type="submit" value="Buscar" name="env"  class="btn2">
            </form>
            
           
               
        </div>
    
             </center>
		</section>
		
	</div>
</body>
</html>