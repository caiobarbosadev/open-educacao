<!-- PHP trazendo quantidade limite por página -->
<?php
// incluindo conexão do banco
include_once("../models/connection.php");

$pagina = filter_input(INPUT_POST, 'pagina', FILTER_SANITIZE_NUMBER_INT);
$qnt_result_pg = filter_input(INPUT_POST, 'qnt_result_pg', FILTER_SANITIZE_NUMBER_INT);
//calcular o inicio visualização
$inicio = ($pagina * $qnt_result_pg) - $qnt_result_pg;


$SelectVideo = "SELECT * FROM video WHERE disponivel = 1 ORDER BY id DESC LIMIT $inicio, $qnt_result_pg";
$limite = mysqli_query($conn, $SelectVideo);

if (($limite) and ($limite->num_rows != 0)) {
    while ($dados = mysqli_fetch_assoc($limite)) {
        echo ('  
                    <a href="./detailed-course.php?id=' . $dados['id'] . '">
                    <div class="course-card">
                    <img style=" object-fit: cover; " src="http://img.youtube.com/vi/' . $dados["link"] . '/maxresdefault.jpg" alt="">
                    <div class="course-card-padding">
                        <p 
                        style="font-size: 14px;
                        overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;" class="title-course-card">' . $dados["titulo"] . '</p>

                        <p 
                        style=" overflow: hidden;
                        text-overflow: ellipsis;
                        display: -webkit-box;
                        -webkit-line-clamp: 1;
                        -webkit-box-orient: vertical;
                        font-size: 12px;
                        " class="text-course-card">' . $dados['detalhes'] . '</p>
                        
                    </div>
                    </div>
                    </a>');
    }

    //Paginação - Somar a quantidade de usuários
    $result_pg = "SELECT COUNT(id) AS num_result FROM video WHERE disponivel = 1";
    $resultado_pg = mysqli_query($conn, $result_pg);
    $row_pg = mysqli_fetch_assoc($resultado_pg);

    //Quantidade de pagina, ceil está aredondano para cima, para não dar números quebrados
    $quantidade_pg = ceil($row_pg['num_result'] / $qnt_result_pg);

    //Limitar os link antes depois
    $max_links = 2;

    echo ("<section style='margin-bottom: 30px;' class='inside-available-courses-card'>
        <!-- dando espaço para a paginação -->
        </section>
        ");
} else {
    echo "<div  role='alert'>Nenhum vídeo foi enviado até o momento! <br> <a href='../views/send-course.php' style='color: blue;'>Envie o seu vídeo e compartilhe conhecimento.</a> </div>";
}



?>

<!-- <nav style="justify-content: center;" aria-label="Page navigation example">
    <ul class="pagination">
        <li class="page-item">
            <?php echo "<a class='page-link' aria-label='Primeira' href='#available-courses' onclick='listar_video(1, $qnt_result_pg)'><span aria-hidden='true'>&laquo;</span></a> "; ?>

        </li>


        <?php for ($pag_ant = $pagina - 2; $pag_ant <= $pagina - 1; $pag_ant++) {
            if ($pag_ant >= 1) {
                echo " <li class='page-item'><a class='page-link' href='#available-courses' onclick='listar_video($pag_ant, $qnt_result_pg)'>$pag_ant </a></li> ";
            }
        } ?>



        <li class="page-item">
            <?php echo "<a class='page-link'> $pagina </a>"; ?>


        </li>

        <?php for ($pag_dep = $pagina + 1; $pag_dep <= $pagina + 2; $pag_dep++) {
            if ($pag_dep <= $quantidade_pg) {
                echo " <li class='page-item'><a class='page-link' href='#available-courses' onclick='listar_video($pag_dep, $qnt_result_pg)'>$pag_dep</a></li> ";
            }
        } ?>

        <li class="page-item">
            <?php echo "<a class='page-link' aria-label='Ultima' href='#available-courses' onclick='listar_video($quantidade_pg, $qnt_result_pg)'><span aria-hidden='true'>&raquo;</span></a> "; ?>

        </li>
    </ul>
</nav> -->