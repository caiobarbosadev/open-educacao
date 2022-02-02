<?php
session_start();
unset($_SESSION['primeironome']);
header('Location: ../views/login.php');
exit();
