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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <!-- coloquei para paginação -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="../styles/student-area.css">
    <title>Área do Aluno</title>
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
            <h2>Olá, <?php echo $_SESSION['primeironome'] ?>!</h2>
            <p>Você está matriculado em 4 cursos.</p>

            <form action="../controllers/search_course.php" method="get">
                <input class="inside-hello-student-input" name="name_course" type="text" placeholder="Pesquisar cursos...">
                <button style="width:50px; height:40px;" type="submit">Buscar</button>
            </form>

        </section>
    </main>

    <main id="available-courses" class="available-courses">
        <section id="cards" class="inside-available-courses">
            <h2>Cursos disponíveis</h2>
            <select name="categories" id="categories" selec>
                <option style="color: #ccc;" value="selecione">Selecione uma categoria:</option>
                <option value="administracao">Administração</option>
                <option value="direito">Direito</option>
                <option value="enfermagem">Enfermagem</option>
                <option value="tecnologia">Tecnologia</option>
            </select>
            <section id="conteudo" style="margin-bottom: 30px;" class="inside-available-courses-card">
                <!-- PHP trazendo card  -->
                
            </section>
        </section>
    </main>

    <main class="report">
        <section class="inside-report">
            <h2>Reportar um erro</h2>
            <p>Você será redirecionado para uma página onde poderá descrever o seu problema.</p>
            <a class="report-button" href="#">Reportar</a>
        </section>
    </main>

    <?php include("../views/layouts/footer.php") ?>

    <script>
			var qnt_result_pg = 10; //quantidade de registro por página
			var pagina = 1; //página inicial
			$(document).ready(function () {
				listar_video(pagina, qnt_result_pg); //Chamar a função para listar os registros
			});
			
			function listar_video(pagina, qnt_result_pg){
				var dados = {
					pagina: pagina,
					qnt_result_pg: qnt_result_pg
				}
				$.post('../controllers/select_card.php', dados , function(retorna){
					//Subtitui o valor no seletor id="conteudo"
					$("#conteudo").html(retorna);
				});
			}
    </script>
</body>

</html>