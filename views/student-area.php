<?php
include('../models/checks_login.php');
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
        <link rel="stylesheet" href="../styles/student-area.css">
        <title>Área do Aluno</title>
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
                        <p><?php echo $_SESSION['primeironome']?></p>
                        <img class="profile-image" src="../images/deschamps.jpg" alt="">
                    </a>
                    <a class="quit-button" href="../models/sair.php">Sair</a>
                </div>
            </section>
        </header>
        <main class="home">
            <section class="inside-home">
                <h1>Área do Aluno</h1>
            </section>
        </main>

        <main class="step-by-step">
            <section class="inside-step">
                <h2>Passo a passo...</h2>
                <div class="inside-step-cards">
                    <div class="card">
                        <p class="title-card">Escolher</p>
                        <p class="text-card">Selecione um curso <br> que você se interessou.</p>
                        <img class="img-card" src="../images/card1.svg" alt="">
                    </div>

                    <div class="card">
                        <p class="title-card">Matricular</p>
                        <p class="text-card">Leia um breve resumo <br> do curso e se inscreva.</p>
                        <img class="img-card" src="../images/card2.svg" alt="">
                    </div>

                    <div class="card">
                        <p class="title-card">Realizar</p>
                        <p class="text-card">Realize as aulas do curso <br> que você se matriculou.</p>
                        <img class="img-card" src="../images/card3.svg" alt="">
                    </div>

                    <div class="card">
                        <p class="title-card">Certificar</p>
                        <p class="text-card">Receba uma certificação <br> ao concluir o curso.</p>
                        <img class="img-card" src="../images/card4.svg" alt="">
                    </div>
                </div>


            </section>
        </main>

        <main class="hello-student">
            <section class="inside-hello-student">
                <h2>Olá, <?php echo $_SESSION['primeironome']?>!</h2>
                <p>Você está matriculado em 4 cursos.</p>
                <input class="inside-hello-student-input" type="text" placeholder="Pesquisar cursos...">
            </section>
        </main>

        <main class="available-courses">
            <section class="inside-available-courses">
                <h2>Cursos disponíveis</h2>
                <select name="categories" id="categories" selec>
                <option style="color: #ccc;" value="selecione">Selecione uma categoria:</option>
                <option value="administracao">Administração</option>
                <option value="direito">Direito</option>
                <option value="enfermagem">Enfermagem</option>
                <option value="tecnologia">Tecnologia</option>
            </select>
                <section style="margin-bottom: 30px;" class="inside-available-courses-card">
                <!-- PHP trazendo card com quantidade limite por página -->
                    <?php 
                    include_once("../controllers/show_card.php");
                    ?>
                </section>
                <div>
                <?php 
                if($pc>1){
                    echo('<a href="../views/student-area.php?pagina='.$anterior.'"><- Anterior</a>');
                }
                // echo("|");
                if($pc<10){
                    echo('<a href="../views/student-area.php?pagina='.$proximo.'">Proxima -></a>');
                }
                ?>
                </div>
            </section>
        </main>

        <main class="report">
            <section class="inside-report">
                <h2>Reportar um erro</h2>
                <p>Você será redirecionado para uma página onde poderá descrever o seu problema.</p>
                <a class="report-button" href="#">Reportar</a>
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