<?php 
session_start();
include('connection.php');


if(empty($_POST['user']) || empty($_POST['password'])){
    echo 'informe o login e senha!';
    header('Location: ../views/login.php');
    exit();
}

$user = mysqli_real_escape_string($conn, $_POST['user']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "select usuario.primeironome 
from login
join usuario ON usuario.id = login.idUsuario
where login.ra = '{$user}' and login.senha = md5('{$password}');";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

print_r($row);
if($row == 1) {
    $Pnome_bd = mysqli_fetch_assoc($result);
    $_SESSION['primeironome'] = $Pnome_bd['primeironome'];
    header('Location: ../views/student-area.php??pagina=');
    exit();
}else{
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../views/login.php');
    exit();
}

?>