<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../styles/registration.css">
    <title>Cadastro - Open UNIFEOB</title>
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
                <form action="../models/model_registration.php" method="post">
                    <div class="form-texts">
                        <h2>Cadastro: <strong>Open UNIFEOB</strong></h2>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive">
                            <label for="first-name">Primeiro nome:</label>
                            <input type="text" name="first-name" id="first-name">
                        </div>
                        <div class="div-label-input-responsive">
                            <label for="surname">Sobrenome:</label>
                            <input type="text" name="surname" id="surname">
                        </div>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive">
                            <label for="email">E-mail:</label>
                            <input type="email" name="email" id="email">
                        </div>
                        <div class="div-label-input-responsive">
                            <label for="ra">RA:</label>
                            <input type="number" name="ra" id="ra">
                        </div>
                    </div>
                    <div class="div-label-input">
                        <div class="div-label-input-responsive" style="display: flex; flex-direction: column;">
                            <label for="password">Senha:</label>
                            <input type="password" name="password" id="password">
                            
                        </div>
                        <button style="margin-top: 20px;" class="registration-button" type="submit" >Cadastrar</button>
                    </div>
                    
                    
                </form>
            </div>
        </section>
    </main>
</body>

</html>