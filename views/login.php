<?php 
//iniciar sessão
session_start();
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
    <link rel="stylesheet" href="../styles/login.css">
    <title>Open UNIFEOB </title>
</head>

<body>
    <main>
        <section class="inside-main-left">
            <div class="inside-main-left-div">
                <h1>Open UNIFEOB</h1>
                <p>Estudante ensina estudante. <br>O Futuro da Educação.</p>
                <img src="../images/Imagem Login.svg" alt="">
            </div>
        </section>
        <section class="inside-main-right">
            <div class="inside-main-right-div">
                <form action="../models/model_login.php" method="post">
                    <div class="form-texts">
                        <h2>Login:</h2>
                        <p>Open UNIFEOB</p>
                    </div>
                    <div class="div-label-input">
                        <label for="user">RA:</label>
                        <input type="text" name="user" id="user">
                    </div>
                    <div class="div-label-input">
                        <label for="password">Senha:</label>
                        <input type="password" name="password" id="password">
                    </div>
                    <button class="login-button" type="submit" id="" >Entrar</button>
                    <div class="form-links">
                        <a href="registration.php">Cadastrar-se</a>
                        <a href="">Esqueci minha senha</a>
                    </div>
                <!-- <?php 
                        echo "<br>";
                        // verifica se existe variavel global 'msg' 
                        if(isset($_SESSION['nao_autenticado'])){
                            // se existir imprime a mensagem
                            echo $_SESSION['nao_autenticado'];
                            // depois de imprimir destroi a mensagem
                            unset($_SESSION['nao_autenticado']);
                        }
                    ?> -->
                    </div>
                </form>
            </div>
        </section>
    </main>

    <!-- Comentário de exemplo -->
</body>

</html>