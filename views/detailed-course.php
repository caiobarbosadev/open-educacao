<?php
include('../models/checks_login.php');
include_once("../controllers/select_one_video.php");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/detailed-course.css">

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
        <section class="inside-course">
            <div class="inside-course-left">
                <?php
                if ($row == 1) {
                    $Video_dados = mysqli_fetch_assoc($retorno);
                    if ($Video_dados["id"] == $_GET["id"]) {
                        echo ('<img style=" object-fit: cover; " src="http://img.youtube.com/vi/' . $Video_dados["link"] . '/maxresdefault.jpg" alt="">');
                ?>
                        <a href="../views/course.php?id=<?php echo $Video_dados['id']?>" class="registration-button">Assistir</a>
                        <a href="../controllers/add_like.php?id=<?php echo $_GET["id"]; ?>"> <?php echo $Video_dados["likes"] ?> Like</a>
                        <p id="demo"></p>
            </div>
            <div class="inside-course-right">
                <div class="inside-course-right-top">
                    <div class="inside-course-right-top-content">
                        <h2><strong>Curso:</strong>
                            <?php
                            echo ($Video_dados["titulo"]);
                            ?>
                        </h2>
                        <p><strong>Detalhes</strong></p>
                        <p style="margin-bottom: 20px;">
                            <?php
                            echo ($Video_dados['conteudos']);
                            ?>
                        </p>
                        <p><strong>O que você vai aprender?</strong></p>
                        <p style="margin-bottom: 20px;">
                    <?php echo ($Video_dados['detalhes']);
                    }
                }
                    ?>
                        </p>
                    </div>
                </div>
                <a href="#">
                    <div class="inside-course-right-bottom">
                        <img src="../images/deschamps.jpg" alt="">
                        <div>
                            <p><strong>Felipe Deschamps</strong></p>
                            <p>Ciência da Computação</p>
                            <p>Módulo 4</p>
                        </div>
                    </div>
                </a>
            </div>
        </section>
    </main>

    <?php include("../views/layouts/footer.php") ?>
</body>

</html>