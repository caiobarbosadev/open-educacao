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
    <link rel="stylesheet" href="../styles/send-course.css" />
    <link rel="stylesheet" href="../styles/layouts/menu.css" />
    <link rel="stylesheet" href="../styles/layouts/footer.css" />
    <title>Enviar vídeo</title>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
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
    <main class="send-video">
        <section class="inside-send-video">
            <h2>Enviar vídeo</h2>
            <p class="inside-send-video-p">Preencha as informações a seguir e faça o upload do seu vídeo.</p>
            <section class="inside-send-video-content">
                <form action="../models/model_video.php" method="post" class="inside-send-video-left">
                    <label for="titulo">Título</label>
                    <input type="text" id="titulo" name="titulo" required>

                    <label for="detalhe">Detalhes</label>
                    <textarea type="text" id="detalhes" name="detalhes"></textarea>

                    <label for="conteudo">Conteúdos</label>
                    <textarea name="conteudo" id="conteudo" required></textarea>

                    <label for="url">URL do Vídeo</label>
                    <input type="text" name="link" id="link" required>

                    <button class="submit-button" type="submit">Enviar</button>
                </form>
                <div class="inside-send-video-right">
                    <p class="inside-send-video-right-p">Instruções</p>
                    <iframe width="360" height="200" src="https://www.youtube.com/embed/AkztZXmaf9E" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <p class="marginBottom">1. Suba o vídeo para o YouTube</p>
                    <p class="marginBottom">2. Configure o vídeo como "Não Listado"</p>
                    <p class="marginBottom">3. Copie o link do seu vídeo</p>
                    <p class="marginBottom">4. Cole o link no campo "URL do Vídeo"</p>
                    <p>5. Clique em <strong>Enviar</strong></p>
                </div>
            </section>
        </section>
    </main>

    <?php include("../views/layouts/footer.php") ?>
    <script src="../views/layouts/mobile-navbar.js"></script>
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