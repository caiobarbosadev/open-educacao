<!-- PHP trazendo quantidade limite por página -->
<?php
include_once("../models/connection.php");

    $busca = "SELECT * FROM video";  //Faço uma busca de tudo
    
    $total_registros_por_pg = "10"; //Defino a quantidade de elementos aparecem por pg
    $pagina = $_GET['pagina']; //pego o número da pg no navegador
    if(!$pagina) //Validação para mostrar a primeira pg caso não pg lá em cima
    {
        $pc = "1";
    }else{
        $pc = $pagina;
    }
    $inicio = $pc - 1; //ele pega o valor da pg menos 1
    $inicio = $inicio * $total_registros_por_pg; //ele multiplica pela qtd ex: 2*10=20
    
    $anterior = $pc -1;
    $proximo = $pc + 1;
    // if($pc>1){
    //     echo('<a href="../views/student-area.php?pagina='.$anterior.'"> - Anterior</a>');
    // }
    // // echo("|");
    // if($pc<10){
    //     echo('<a href="../views/student-area.php?pagina='.$proximo.'"> - Proxima</a>');
    // }
    
    $limite = mysqli_query($conn, "$busca LIMIT $inicio, $total_registros_por_pg");
    //limita a instrução sql do inicio (ex 20) e traga mais 10 registros
    $todos = mysqli_query($conn, $busca);

    $tr = mysqli_num_rows($todos);

    $tp = $tr / $total_registros_por_pg; //para saber até quantas pg tem

    while($dados = mysqli_fetch_assoc($limite))
    {
        echo('  <a href="./detailed-course.php">
                <div class="course-card">
                <img src="../images/js-course.png">
                <div class="course-card-padding">
                    <p class="title-course-card">'.$dados["titulo"].'</p>
                    <p class="text-course-card">Aplique simples animações <br> com JavaScript no seu projeto.</p>
                    <p class="tag-course-card">#tech</p>
                </div>
                </div>
                </a>');
    }


?>