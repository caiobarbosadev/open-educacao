<?php 
session_start();

if(!$_SESSION['primeironome']){
    header('Location: ../views/login.php');
    exit();
}

?>

