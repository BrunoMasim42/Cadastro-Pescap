<?php

$hostname= "localhost";
$bancodedados= "pescado2";
$usuario= "root";
$senha= "root";

$conn = new mysqli ("$hostname", "$usuario","$senha","$bancodedados");


mysqli_set_charset($conn, "utf8");

if($conn-> connect_errno ){
    echo "Falha ao conectar: (". $conn-> connect_errno . ") " . $conn->connect_error; 
}


?>