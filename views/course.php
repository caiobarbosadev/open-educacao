<?php 

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/course.css" />

    <title>Curso</title>
</head>

<body>
    <?php

    $acesso = $_SESSION["idcargo"];

    if ($acesso == 1) {
        include("../views/layouts/menuAdministrador.php");
    } else if ($acesso == 2) {
        include("../views/layouts/menuAprovador.php");
    } else if ($acesso == 3) {
        include("../views/layouts/menuAluno.php");
    }

    ?>

    <main class="course">
        <section class="inside-course-title">
            <h2>Animações com JS</h2>
            <p>Felipe Deschamps</p>
        </section>
        <div class="inside-course-video-buttons">
            <a style="margin-right: 10px" class="video-button" href="#">Anterior</a>
            <a class="video-button" href="#">Próximo</a>
        </div>

        <section class="inside-course">
            <div class="inside-course-left">

                <div class="card-video-title">
                    <div class="card-video-title-padding">
                        <p style="margin-bottom: 5px; font-weight: 400;">
                            Manipulando os arquivos HTML e CSS da página
                        </p>
                        <div class="card-video-flex">
                            <p>14 min</p>
                            <div class="detail-card">
                                <img style="margin-right: 10px;" src="../images/correct-icon.svg" alt="" />
                                <p>Concluído</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-video-title">
                    <div class="card-video-title-padding">
                        <p style="margin-bottom: 5px; font-weight: 400;">
                            Manipulando os arquivos HTML e CSS da página
                        </p>
                        <div class="card-video-flex">
                            <p>14 min</p>
                            <div class="detail-card">
                                <img style="margin-right: 10px;" src="../images/correct-icon.svg" alt="" />
                                <p>Concluído</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card-video-title">
                    <div class="card-video-title-padding">
                        <p style="margin-bottom: 5px; font-weight: 400;">
                            Manipulando os arquivos HTML e CSS da página
                        </p>
                        <div class="card-video-flex">
                            <p>14 min</p>
                            <div class="detail-card">
                                <img style="margin-right: 10px;" src="../images/correct-icon.svg" alt="" />
                                <p>Concluído</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="inside-course-right">
                <iframe src="https://www.youtube.com/embed/pKTOT63X9XQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <h2 style="margin-bottom: 20px;">Aplicando lógica de programação com JavaScript</h2>
                <p style="font-weight: bold;">Progresso do curso: <span style="color: #00e394;">35%</span></p>
                <img style="margin-bottom: 20px;" src="../images/progress.svg" alt="">
                <p><strong>Conclusão do curso</strong></p>
                <p style="margin-bottom: 20px;">Você poderá realizar a conclusão do curso e emitir o certificado após completar 100% do progresso.</p>
                <div class="div-button">
                    <input class="finish-button" type="submit" value="Concluir curso">
                </div>
            </div>
        </section>
    </main>

    <?php include("../views/layouts/footer.php") ?>
</body>

</html>