<?php
//Chamando o arquivo de conexão
include_once("connection.php");

//Recebendo as informações coletadas no input para inserir no banco de dados
// esse trim que estou passando no post é para tirar os espaço
// e o md5 na senha é para cripitografar e senha inserida no banco 
$firstName = mysqli_real_escape_string($conn, trim($_POST["first-name"]));
$surname = mysqli_real_escape_string($conn, trim($_POST["surname"]));
$email = mysqli_real_escape_string($conn, trim($_POST["email"]));
$ra = mysqli_real_escape_string($conn, trim($_POST["ra"]));
$password = mysqli_real_escape_string($conn, trim(md5($_POST["password"])));

//Instrução SQL para inserir na tabela usuários
$queryUser = "INSERT INTO usuario(primeironome, sobrenome, email, ra, senha, idCargo) VALUES ('$firstName', '$surname', '$email', '$ra', '$password', 3)";


//Verificar se a query foi executada
if (!mysqli_query($conn, $queryUser)) {
    die("<br>Falha na Inserção dos Dados = $queryUser -> " . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}

//Capturar o ID inserido
$id = mysqli_insert_id($conn);


//Instrução SQL para inserir na tabela login
$queryLogin = "INSERT INTO login (ra, senha, idUsuario) VALUES ('$ra', '$password', '$id')";

//Verificar se a query de inserir na tabela login foi executada
if (!mysqli_query($conn, $queryLogin)) {
    die("Ocorreu um erro na inserção dos dados! - $queryLogin ->" . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}

//Fechar a conexão
header("location:../views/login.php");
mysqli_close($conn);
