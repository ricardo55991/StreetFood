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
        <form class="card" action="../scripts/cadastrar.php" method="POST">
                <div class="logo">
                    <img src="../assets/logo.png">
                </div>
            <div class="card-content">
                <div class="card-content-area">
                    <label for="nome" >Nome</label>
                    <input type="text" name="usuarioCadastro" id="usuarioCadastro" autocomplete="off" placeholder="Informe seu nome.">
                </div>
                <div class="card-content-area">
                    <label for="cpf">CPF</label>
                    <input type="text" name="cpf" id="cpf" autocomplete="off"  placeholder="Informe seu CPF.">
                </div>
                <div class="card-content-area">
                    <label for="email">E-mail</label>
                    <input type="email" name="emailCadastro" id="emailCadastro" autocomplete="off" placeholder="Informe seu e-mail.">
                </div>
                <div class="card-content-area">
                    <label for="ntelefone">Número de telefone</label>
                    <input type="tel" name="numTelefone" id="numTelefone" autocomplete="off" placeholder="Informe seu número de telefone.">
                </div>
                <div class="card-content-area">
                    <label for="dnascimento">Data de nascimento</label>
                    <input type="date" name="dataNascimento" id="dataNascimento" autocomplete="off">
                </div>
                <div class="card-content-area">
                    <label for="password">Senha</label>
                    <input type="password" name="senhaCadastro" id="senhaCadastro" autocomplete="off" placeholder="Crie uma senha.">
                </div>
            </div>
            <div class="card-footer">
                <a href="../pages/paginaInicial.php">
                    <input type="submit" name="submit" value="Cadastrar" class="submit">
                </a>
                <a href="../pages/login.php" class="ja_tenho_cadastro">Já tem conta?</a>
            </div>
        </form>
    </div>
</body>

</html>