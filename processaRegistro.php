<?php  include_once ("conexao.php");?>

<?php

    
    $quantidade = $_POST['quantidade'];
    $especie = $_POST['especie'];
    $valor = $_POST['valor'];
    $dataprodcao = $_POST['dataprodcao'];
    $destinoproducao = $_POST['destinoproducao'];
    

    $conn = new mysqli ("$hostname", "$usuario","$senha","$bancodedados");

    mysqli_select_db($conn, '$dbname');
    $sql= "INSERT INTO usuarios( quantidade, especie, valor, dataprodcao, destinoproducao) VALUES (' $quantidade', '$especie', '$valor', '$dataprodcao', '$destinoproducao')"; 

    if(mysqli_query($conn, $sql)){
        echo "<script> alert('Dados salvos corretamente!'); window.location = 'index.php' </script>";

    } else {
        echo "Deu erro!". $sql. "<br>" . mysqli_error($conn); 
    }

    mysqli_close($conn);
    



?>