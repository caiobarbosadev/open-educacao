<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../styles/send-course.css" />
    <title>Enviar vídeo</title>
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

    <main class="send-video">
        <section class="inside-send-video">
            <h2>Enviar vídeo</h2>
            <p class="inside-send-video-p">Preencha as informações a seguir e faça o upload do seu vídeo.</p>
            <section class="inside-send-video-content">
                <form action="../models/model_video.php" method="post" class="inside-send-video-left">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" id="titulo" name="titulo">

                    <label for="detalhe">Detalhes</label>
                    <textarea type="text" name="detalhes" id="detalhes" name="detalhes"></textarea>

                    <label for="conteudo">Conteúdos</label>
                    <textarea name="conteudo" name="conteudo" id="conteudo"></textarea>

                    <label for="url">URL do Vídeo</label>
                    <input type="text" name="link" id="url" name="url">

                    <button class="submit-button" type="submit" >Enviar</button>
                </form>
                <div class="inside-send-video-right">
                    <p class="inside-send-video-right-p">Instruções</p>
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/AkztZXmaf9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="marginBottom">1. Suba o vídeo para o YouTube</p>
                    <p class="marginBottom">2. Configure o vídeo como "Não Listado"</p>
                    <p class="marginBottom">3. Copie o link do seu vídeo</p>
                    <p class="marginBottom">4. Cole o link no campo "URL do Vídeo"</p>
                    <p>5. Clique em <strong>Enviar</strong></p>
                </div>
            </section>
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