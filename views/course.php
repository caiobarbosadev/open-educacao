<?php
include_once("../models/connection.php");

session_start();

$idvideo = $_GET['id'];

$queryBuscaVideo = "SELECT * FROM video WHERE id = '$idvideo'";

$result = mysqli_query($conn, $queryBuscaVideo);

$resultVideo = mysqli_fetch_assoc($result);

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
    <link rel="stylesheet" href="../styles/layouts/menu.css">
    <link rel="stylesheet" href="../styles/layouts/footer.css">
    <title><?php echo ($resultVideo['titulo']); ?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
            <h2><?php echo ($resultVideo['titulo']); ?></h2>
        </section>

        <section class="inside-course">
            <div class="inside-course-right">
                <iframe src="https://www.youtube.com/embed/<?php echo $resultVideo['link'] ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <div class="info-video">
                    <p><strong><?php echo ($resultVideo['titulo']); ?></strong></p>
                    <p><?php echo ($resultVideo['detalhes']); ?></p>
                    <p><?php echo ($resultVideo['conteudos']); ?></p>
                </div>

                <p>Assista o vídeo inteiro e retire o seu certificado de reconhecimento.</p>

                <div class="div-button">
                    <input class="finish-button" type="submit" value="Concluir curso">
                </div>

            </div>

        </section>
    </main>

    <?php include("../views/layouts/footer.php") ?>
    <script src="https://kit.fontawesome.com/11e70aec3a.js" crossorigin="anonymous"></script>
    <script>
        const hamburguer = document.getElementById('hamburguer');
        const navUL = document.getElementById('nav-ul');

        hamburguer.addEventListener('click', () => {
            navUL.classList.toggle('show')
        });
    </script>
</body>

</html>