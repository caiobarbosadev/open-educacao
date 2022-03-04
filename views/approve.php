<?php

session_start();

include_once "../models/connection.php";

$result_relatos = "SELECT * FROM video WHERE disponivel = 0";

$resultado_relatos = mysqli_query($conn, $result_relatos);

if (!$resultado_relatos) {
    die("Falha na busca dos dados!");
} else {
    //echo "Dados buscados com sucesso!";
}

mysqli_close($conn);

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet" />

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/approve.css" />
    <link rel="stylesheet" href="../styles/layouts/menu.css">
    <link rel="stylesheet" href="../styles/layouts/footer.css">
    <title>Open Educação: Aprovar Conteúdos</title>
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
        header("location: ../views/student-area.php");
    }

    ?>

    <div class="container">
        <h4>Aprovação de Conteúdos</h4>

        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Detalhes</th>
                    <th scope="col">Conteúdo</th>
                    <th scope="col">Aprovar</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                <?php while ($rows_relatos = mysqli_fetch_assoc($resultado_relatos)) { ?>
                    <tr>
                        <td>
                            <?php echo $rows_relatos['id']; ?>
                        </td>
                        <td>
                            <?php echo $rows_relatos['titulo']; ?>
                        </td>
                        <td>
                            <?php echo $rows_relatos['detalhes']; ?>
                        </td>
                        <td>
                            <?php echo $rows_relatos['conteudos']; ?>
                        </td>
                        <td>
                            <button data-id='<?php echo $rows_relatos['id']; ?>' type="button" class="userinfo btn btn-success mb-3" data-bs-toggle="modal" data-bs-target="#approve">Sim</button>
                        </td>
                        <td>
                            <button data-id='<?php echo $rows_relatos['id']; ?>' type="button" class="userinfo btn btn-outline-danger" data-bs-toggle="modal" data-bs-target="#reprove">
                                X
                            </button>
                        </td>
                    </tr>
                <?php } ?>

            </tbody>
        </table>
    </div>

    <div class="modal fade" id="approve" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Aprovação de conteúdo <span style="color: #00e394;"><i class="fas fa-check-circle"></i></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- O CONTEÚDO QUE ESTÁ AQUI É INSERIDO VIA AJAX PELO ARQUIVO AJAXFILE.PHP -->
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" id="reprove" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Reprovação de conteúdo <span style="color: #dc3545;"><i class="far fa-times-circle"></i></span></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- O CONTEÚDO QUE ESTÁ AQUI É INSERIDO VIA AJAX PELO ARQUIVO AJAXFILE.PHP -->
                </div>

            </div>
        </div>
    </div>

    <?php include("../views/layouts/footer.php") ?>

    <script type='text/javascript'>
        $(document).ready(function() {
            $('.userinfo').click(function() {
                var videoId = $(this).data('id');
                let revisionChoice = $(this).data('bsTarget');
                $.ajax({
                    url: '../models/ajaxfile.php' + location.search,
                    type: 'POST',
                    data: {
                        videoId: videoId,
                        revisionChoice: revisionChoice
                    },
                    success: function(response) {
                        $('.modal-body').html(response);
                    }
                });
            });
        });
    </script>

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