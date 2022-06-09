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
                        <a class="nav-link" href="localizacao.php">Localização</a>
                    </li>
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
                        <a class="nav-link" href="localizacao.php">Localização</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="faleConosco.php">Fale conosco</a>
                    </li>
                </ul>
            </div>
            <form class="d-flex">
                <a class="btn btn-outline-light" type="submit" href="pagamento.php">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart-fill mb-1" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4zm-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                </svg>
                    Carrinho
                    <span class="badge bg-dark text-white ms-1 rounded-pill">
                    <span id="incremento">
                        0
                    </span>
                    </span>
                </a>
            </form>
        <div class="">
           <span style="color: white; margin-right: 15px; margin-left: 15px;"> 
           '. $nomeUser . '  
           </span>
           <a href="../scripts/deslogar.php" class="btn btn-warning">Sair</a>
        </div>
    </div>
        </div>
    </nav>';
}
?>
