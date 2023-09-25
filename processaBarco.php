<?php  include_once ("conexao.php");?>


<?php

    $nomedaembarcacao = $_POST['nomedaembarcacao'];
    $cadastromarinha = $_POST['cadastromarinha'];
    $tamanho = $_POST['tamanho'];
    $casco = $_POST['casco'];
    $fabricacao = $_POST['fabricacao'];
    $potencia = $_POST['potencia'];
    $localatuacao = $_POST['localatuacao'];
    $quantidade = $_POST['quantidade'];
    $especie = $_POST['especie'];
    $valor = $_POST['valor'];
    $dataprodcao = $_POST['dataprodcao'];
    $destinoproducao = $_POST['destinoproducao'];

    $conn = new mysqli ("$hostname", "$usuario","$senha","$bancodedados");

    mysqli_select_db($conn, '$dbname');
    $sql= "INSERT INTO usuarios(nomedaembarcacao, cadastromarinha, tamanho, casco, fabricacao, potencia, localatuacao, quantidade, especie, valor, dataprodcao, destinoproducao) VALUES ('$nomedaembarcacao', '  $cadastromarinha', '$tamanho', '$casco', '$fabricacao', '$potencia', '$localatuacao', '$quantidade', '$especie', '$valor', '$dataprodcao', '$destinoproducao')"; 

    if(mysqli_query($conn, $sql)){
        echo "<script> alert('Dados salvos corretamente!'); window.location = 'embarcacao.php' </script>";

    } else {
        echo "Deu erro!". $sql. "<br>" . mysqli_error($conn); 
    }

    mysqli_close($conn);



?>