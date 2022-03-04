<?php

//Informações para se conectar ao banco de dados
$server = "";
$user = "";
$password = "";
$dbname = "";

//Conexão com o banco de dados
$conn = mysqli_connect($server, $user, $password, $dbname);

//Verificando se a conexão foi bem sucedida
if (!$conn) {
    //Se não: mostra esta mensagem de falha
    die("Falha na conexão com o banco de dados!");
} else {
    //Se sim: mostra esta mensagem de sucesso
    // echo "Conexão com o banco de dados realizada com sucesso!";


}
