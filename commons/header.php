<?php
require '../scripts/verifica.php';
$nome = $nomeUser;

if(empty($nomeUser)){
    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="menu-principal container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="text-start mx-5">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="paginaInicial.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cardapio.php">Cardápio</a>
                    </li>
                    <img class="logo" href="index.php" src="../assets/logo.png">
                    <li class="nav-item">
                        <a class="nav-link" href="">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faleConosco.php">Fale conosco</a>
                    </li>
                </ul>
            </div>
        <div class="text-end">
            <a href="login.php" class="btn btn-light">Entrar</a>
            <a href="cadastro.php" class="btn btn-warning">cadastro</a>
        </div>
    </div>
        </div>
    </nav>';
    }
else{
    echo '
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="menu-principal container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="text-start mx-5">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="paginaInicial.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="sobre.php">Sobre</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="cardapio.php">Cardápio</a>
                    </li>
                    <img class="logo" href="index.php" src="../assets/logo.png">
                    <li class="nav-item">
                        <a class="nav-link" href="">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faleConosco.php">Fale conosco</a>
                    </li>
                </ul>
            </div>
        <div class="">
           <span style="color: white; margin-right: 15px;"> 
           '. $nomeUser . '  
           </span>
           <a href="../scripts/deslogar.php" class="btn btn-warning">Sair</a>
        </div>
    </div>
        </div>
    </nav>';
}
?>
