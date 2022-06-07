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
                    <label for="usuario">Nome</label>
                    <input type="text" id="usuario" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password">E-mail</label>
                    <input type="email" id="email" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password">Senha</label>
                    <input type="password" id="password" autocomplete="off">
                </div>
            </div>
            <div class="card-footer">
                <a href="../pages/home.php">
                    <input type="submit" value="Cadastrar" class="submit">
                </a>
                <a href="#" class="ja_tenho_cadastro">Já tem conta?</a>
            </div>
        </form>
    </div>
</body>

</html>