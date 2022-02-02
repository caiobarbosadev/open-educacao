<?php
session_start();

include('connection.php');


if (empty($_POST['user']) || empty($_POST['password'])) {
    echo 'informe o login e senha!';
    header('Location: ../views/login.php');
    exit();
}

$user = mysqli_real_escape_string($conn, $_POST['user']);
$password = mysqli_real_escape_string($conn, $_POST['password']);

$query = "select *
from login
join usuario ON usuario.id = login.idUsuario
where login.ra = '{$user}' and login.senha = md5('{$password}');";

$result = mysqli_query($conn, $query);

$row = mysqli_num_rows($result);

print_r($row);
if ($row == 1) {
    $Pnome_bd = mysqli_fetch_assoc($result);
    $_SESSION['id'] = $Pnome_bd['id'];
    $_SESSION['primeironome'] = $Pnome_bd['primeironome'];
    $_SESSION['sobrenome'] = $Pnome_bd['sobrenome'];
    $_SESSION['email'] = $Pnome_bd['email'];
    $_SESSION['ra'] = $Pnome_bd['ra'];
    $_SESSION['idcargo'] = $Pnome_bd['idCargo'];

    header('Location: ../views/student-area.php');
    exit();
} else {
    $_SESSION['nao_autenticado'] = true;
    header('Location: ../views/login.php');
    exit();
}
