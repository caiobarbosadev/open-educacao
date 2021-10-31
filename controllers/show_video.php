<?php 
include_once("../models/connection.php");
        $sql = "SELECT * from video";
        $retorno = mysqli_query($conn, $sql);

        $teste = mysqli_fetch_assoc($retorno);

        

?>