<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/login.css">
    <title>Street Food</title>
</head>

<body>
    <div id="login">
        <form class="card">
            <div class="logo">
                <img src="../assets/logo.png">
            </div>
            <div class="card-content">
                <div class="card-content-area">
                <label> Insira seu e-mail que você usou no cadastro. Nós mandaremos um e-mail com um link para você redefinir sua senha.</label><br>
                    <label for="usuario">E-mail</label>
                    <input type="text" id="usuario" autocomplete="off" placeholder="Informe seu e-mail.">
                </div>
            </div>
            <div class="card-footer">
                <a href="../pages/home.php">
                    <input type="submit" value="Enviar" class="submit">
                </a><br>
                <a href="../pages/login.php" class="recuperar_senha">lembrou da senha? Clique aqui para retornar.</a><br>
                <a href="../pages/cadastre-se.php" class="cadastre-se">Novo por aqui? Clique aqui e crie sua conta.</a>
            </div>
        </form>
    </div>
</body>

</html>