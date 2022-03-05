<?php

include_once("connection.php");

// Receber informação do input
$id = mysqli_real_escape_string($conn, $_POST["videoId"]);
$status = $_POST["status"];

if ($status == "approved") {
    $updateQuery = " UPDATE video SET disponivel = 1 WHERE id = '$id' ";
} else if ($status == "reproved") {
    // será necessário criar uma nova coluna no banco para vídeos recusados
}

// Estruturar a query que será executada
if (!mysqli_query($conn, $updateQuery)) {
    echo "Deu ruim!";
} else {
    //echo "Deu bom";
    header("location: ../views/approve.php");
}