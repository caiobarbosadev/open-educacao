<?php
session_start();
include_once("../models/connection.php");


// inserindo o id do video que está na url em uma variável
$id_video = $_GET["id"];

// inserindo o id do usuario que está logado da sessão em uma variável
$id_usuario = $_SESSION['id'];

// verifica se o usuario existe
$mostra_user = "SELECT * from usuario WHERE id = '{$id_usuario}'";
 //Verificar se a query foi executada
 if(!mysqli_query($conn, $mostra_user)) {
    die("<br>Falha na Inserção dos Dados = $mostra_user -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));

}

// consulta a tabela video onde o id do video for igual da url
$mostra_video = "SELECT * from video WHERE id = '{$id_video}'";

//Verificar se a query foi executada
if(!mysqli_query($conn, $mostra_video)) {
    die("<br>Falha na Inserção dos Dados = $mostra_video -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));

} 
$consulta_video = mysqli_query($conn, $mostra_video);
// inserindo quantidade de like que está no Banco em uma variável
$quantidade_like = mysqli_fetch_assoc($consulta_video);

// adicionando um like em uma variável
$gostei = $quantidade_like['likes'] + 1;


// consulta se na tabela de like o usuario já curtiu o video em específico
$verifica_likes = "SELECT * from likes WHERE IdUsuario = '{$id_usuario}' AND IdVideo = '{$id_video}'";



$consulta_likes = mysqli_query($conn, $verifica_likes);

$rows = mysqli_num_rows($consulta_likes);

if($rows == 1){
    
    echo "<script>
    
        window.location.href='../views/detailed-course.php?id={$id_video}';
        alert('voce já curtiu esse video!!');
        
            
    </script>";
    // header('Location: ../views/detailed-course.php?id='.$id_video);

}else{

    // insere na tabela like o id do usuario que está curtindo e do video que foi curtido
    $queryLike = "INSERT INTO likes(IdUsuario, IdVideo) VALUES('{$id_usuario}', '{$id_video}')";
    
     //Verificar se a query foi executada
     if(!mysqli_query($conn, $queryLike)) {
        die("<br>Falha na Inserção dos Dados = $queryLike -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    
    }

    // atualizando a tabela de video, adicionando na coluna likes um novo like
    $update_video = "UPDATE video SET likes = '{$gostei}' WHERE id = '{$id_video}'";
     //Verificar se a query foi executada
        if(!mysqli_query($conn, $update_video)) {
        die("<br>Falha na Inserção dos Dados = $update_video -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    
    }
    header('Location: ../views/detailed-course.php?id='.$id_video);

}
