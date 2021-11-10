<?php 
include_once("../models/connection.php");
// COMPARA COM O BANCO E MOSTRAR OS DADOS DE CADA VIDEO EM ESPECIFICO
    $SelectVideo = "SELECT * from video where id = {$_GET['id']} ";        

    $retorno = mysqli_query($conn, $SelectVideo);

    $row = mysqli_num_rows($retorno);
?>