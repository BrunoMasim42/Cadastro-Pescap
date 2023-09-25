<?php  include_once ("conexao.php");?>

<?php

    $nomepescador = $_POST['nomepescador'];
    $numerorgp = $_POST['numerorgp'];
    $cadastrocolonia = $_POST['cadastrocolonia'];
    $nascimentopescador = $_POST['nascimentopescador'];
    $sexo = $_POST['sexo'];
    $RG = $_POST['RG'];
    $CPF = $_POST['CPF'];
    $endereco = $_POST['endereco'];
    $cidade = $_POST['cidade'];
    $cep = $_POST['cep'];
    $quantidade = $_POST['quantidade'];
    $especie = $_POST['especie'];
    $valor = $_POST['valor'];
    $dataprodcao = $_POST['dataprodcao'];
    $destinoproducao = $_POST['destinoproducao'];

    $conn = new mysqli ("$hostname", "$usuario","$senha","$bancodedados");


    mysqli_select_db($conn, '$dbname');
    $sql= "INSERT INTO usuarios(nomepescador, numerorgp, cadastrocolonia, nascimentopescador, sexo, RG, CPF, endereco, cidade, cep, quantidade, especie, valor, dataprodcao, destinoproducao  ) VALUES ('$nomepescador', ' $numerorgp', '$cadastrocolonia', ' $nascimentopescador', ' $sexo', '$RG', '$CPF', '$endereco', '$cidade', '$cep', '$quantidade', '$especie', '$valor', '$dataprodcao', '$destinoproducao')"; 

    if(mysqli_query($conn, $sql)){
        echo "<script> alert('Dados salvos corretamente!'); window.location = 'validar.php' </script>";

    } else {
        echo "Deu erro!". $sql. "<br>" . mysqli_error($conn); 
    }

    mysqli_close($conn);
    




?>