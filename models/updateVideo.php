<?php

include_once("connection.php");

//Receber informação do input
$id = mysqli_real_escape_string($conn, $_POST["videoId"]);
$confirmar = mysqli_real_escape_string($conn, $_POST["confirmar"]);


//Estruturar a query que será executada

$updateQuery = " UPDATE video SET disponivel = 1 WHERE id = '$id' ";

if(!mysqli_query($conn, $updateQuery)) {
    echo "Deu ruim!";
} else {
    //echo "Deu bom";
    header("location: ../views/approve.php");
}

?>