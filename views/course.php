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
    <header>
        <section class="inside-header">
            <h2>Open UNIFEOB</h2>
            <div class="inside-header-menu">
                <a class="item-menu-space" href="#">Cursos</a>
                <a class="item-menu-space" href="#">Categorias</a>
                <a class="item-menu-space" href="#">Enviar</a>
                <a href="#">Reportar</a>
            </div>
            <div class="inside-header-profile-quit">
                <a class="profile-button" href="#">
                    <p>Felipe</p>
                    <img class="profile-image" src="../images/deschamps.jpg" alt="" />
                </a>
                <a class="quit-button" href="#">Sair</a>
            </div>
        </section>
    </header>

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