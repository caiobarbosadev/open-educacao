<!-- PHP trazendo quantidade limite por página -->
<?php
// incluindo conexão do banco
include_once("../models/connection.php");
    
    $SelectVideo = "SELECT * from video WHERE disponivel = 1";
    
    $limite = mysqli_query($conn, $SelectVideo);
   
    while($dados = mysqli_fetch_assoc($limite))
    {
        echo('  
                <a href="./detailed-course.php?id='.$dados['id'].'">
                <div class="course-card">
                <img style=" object-fit: cover; " src="http://img.youtube.com/vi/'.$dados["link"].'/maxresdefault.jpg" alt="">
                <div class="course-card-padding">
                    <p 
                    style="font-size: 14px;
                    overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;" class="title-course-card">'.$dados["titulo"].'</p>

                    <p 
                    style=" overflow: hidden;
                    text-overflow: ellipsis;
                    display: -webkit-box;
                    -webkit-line-clamp: 1;
                    -webkit-box-orient: vertical;
                    font-size: 12px;
                    " class="text-course-card">'.$dados['detalhes'].'</p>
                    
                </div>
                </div>
                </a>');
    }

    
                
?>