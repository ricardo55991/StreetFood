<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link href="../styles/paginaInicial.css" rel="stylesheet">
    <link href="../styles/produtoDescricao.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <title>Street Food</title>
</head>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="menu-principal container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
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

                    <form class="d-flex" style="margin-left: 20px;">
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

                </ul>
            </div>
        </div>
    </div>
</nav>

<?php include '../scripts/detalhesProduto.php'; ?>

<!--Footer-->
<?php include '../commons/footer.php'; ?>
<!--Footer-->

<script src="/scripts/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
<script>

    var valorTotal = 0;
    if(Number(sessionStorage.getItem('valorTotal')) > 0){
        valorTotal = Number(sessionStorage.getItem('valorTotal'));
    }

    function carrinho(valor){
        var y = Number(sessionStorage.getItem('incremento'));
        ++y;
        document.getElementById('incremento').innerHTML = y;
        sessionStorage.setItem('incremento', Number(y))

        valorTotal += valor
        sessionStorage.setItem('valorTotal', parseFloat(valorTotal.toFixed(2)))
        console.log(sessionStorage.getItem('incremento'))
    }

</script>

<?php
//    $valorTotal = "<script>document.write(sessionStorage.getItem('valorTotal'))</script>";
//    echo $valorTotal;
    // $incremento = "<script>document.write(sessionStorage.getItem('incremento'))</script>";
    // $_SESSION['Incremento'] = $incremento
?>
</body>

</html>