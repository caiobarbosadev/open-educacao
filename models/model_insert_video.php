<?php
//Chamando o arquivo de conexão
include_once("connection.php");

//Recebendo as informações coletadas no input para inserir no banco de dados
// esse trim que estou passando no post é para tirar os espaço
// e o md5 na senha é para cripitografar e senha inserida no banco 
$titulo = mysqli_real_escape_string($conn, trim($_POST["titulo"]));
$detalhes = mysqli_real_escape_string($conn, trim($_POST["detalhes"]));
$conteudo = mysqli_real_escape_string($conn, trim($_POST["conteudo"]));
$link = mysqli_real_escape_string($conn, trim($_POST["link"]));


// tratando url

$url = $link;
$array_nome = explode("v=", $url);
// print_r($array_nome);

if (strpos($array_nome[1], "&") != 0) {
    $codigo = explode("&", $array_nome[1]);
} else {
    $codigo[0] = trim($array_nome[1]);
}

//Instrução SQL para inserir na tabela usuários
$queryUser = "INSERT INTO video(titulo, detalhes, conteudos, link) VALUES ('$titulo', '$detalhes', '$conteudo', '$codigo[0]')";


//Verificar se a query foi executada
if (!mysqli_query($conn, $queryUser)) {
    die("<br>Falha na Inserção dos Dados = $queryUser -> " . mysqli_errno($conn) . " -> " . mysqli_error($conn));
}

header("Location: ../views/detailed-course.php");
mysqli_close($conn);
