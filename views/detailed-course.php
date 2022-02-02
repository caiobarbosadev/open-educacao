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
    <link rel="stylesheet" href="../styles/layouts/menu.css">
    <link rel="stylesheet" href="../styles/layouts/footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
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
                        <a href="../views/course.php?id=<?php echo $Video_dados['id'] ?>" class="registration-button">Assistir</a>
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

    <!--- Secure Site Seal - DO NOT EDIT --->
    <span id="ss_img_wrapper_115-55_image_en">
        <a href="http://www.alphassl.com/ssl-certificates/wildcard-ssl.html" target="_blank" title="SSL Certificates">
            <img alt="Wildcard SSL Certificates" border=0 id="ss_img" src="//seal.alphassl.com/SiteSeal/images/alpha_noscript_115-55_en.gif" title="SSL Certificate">
        </a>
    </span>
    <script type="text/javascript" src="//seal.alphassl.com/SiteSeal/alpha_image_115-55_en.js"></script>
    <!--- Secure Site Seal - DO NOT EDIT --->
</body>

</html>