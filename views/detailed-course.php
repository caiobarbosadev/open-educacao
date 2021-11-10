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
    <header>
        <section class="inside-header">
            <h2>Open UNIFEOB</h2>
            <div class="inside-header-menu">
                <a class="item-menu-space" href="javascript:history.back()">Cursos</a>
                <a class="item-menu-space" href="#">Categorias</a>
                <a class="item-menu-space" href="#">Enviar</a>
                <a href="#">Reportar</a>
            </div>
            <div class="inside-header-profile-quit">
                <a class="profile-button" href="#">
                    <p><?php echo $_SESSION['primeironome']?></p>
                    <img class="profile-image" src="../images/deschamps.jpg" alt="">
                </a>
                <a class="quit-button" href="../models/sair.php">Sair</a>
            </div>
        </section>
    </header>
    <main class="course">
        <section class="inside-course">
            <div class="inside-course-left">
                <?php
                if($row == 1){
                    $Video_dados = mysqli_fetch_assoc($retorno);
                    if($Video_dados["id"] == $_GET["id"]){
                    echo('<img style=" object-fit: cover; " src="http://img.youtube.com/vi/'.$Video_dados["link"].'/maxresdefault.jpg" alt="">');
                ?>   
                <input class="registration-button" type="submit" value="Matricular">
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
                                echo($Video_dados['conteudos']);
                            ?>
                        </p>
                        <p><strong>O que você vai aprender?</strong></p>
                        <p style="margin-bottom: 20px;">
                            <?php echo($Video_dados['detalhes']);
                                }
                             }
                            ?>  
                        </p>
                        <p><strong>Aulas:</strong> 3</p>
                        <p>Manipulando os arquivos HTML e CSS da página</p>
                        <p>Aplicando lógica de programação com JavaScript</p>
                        <p>Animações com JavaScript na prática</p>
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

    <footer>
        <section class="inside-footer">
            <div class="inside-footer-div1">
                <h2>Estudante ensina <br> estudante.</h2>
                <p>Open UNIFEOB</p>
            </div>
            <div class="inside-footer-div2">
                <p>Menu</p>
                <a href="">Cursos</a>
                <a href="">Categorias</a>
                <a href="">Reportar</a>
                <a class="item-margin" href="">Página da web</a>
            </div>
            <div class="inside-footer-div3">
                <p class="inside-footer-div3-p1">Redes Sociais</p>
                <div class="footer-icons">
                    <a href=""><img src="../images/instagram-icon.svg" alt=""></a>
                    <a href=""><img src="../images/facebook-icon.svg" alt=""></a>
                    <a href=""><img src="../images/whatsapp-icon.svg" alt=""></a>
                </div>
                <p class="inside-footer-div3-p2">Desenvolvido por</p>
                <p class="inside-footer-div3-p3">Equipe 1 - ADS M4</p>
            </div>
            <div class="inside-footer-div4">
                <p class="inside-footer-div4-p1">Entenda um pouco mais</p>
                <p class="inside-footer-div4-p2">Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor.</p>
                <img class="unifeob-logo" src="../images/unifeob-logo.png" alt="">
            </div>
        </section>
    </footer>
</body>

</html>