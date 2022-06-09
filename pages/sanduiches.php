<?php
    session_start();
    if (isset($_GET['produtoUnidade']))
    {
        $produto = ($_GET['produtoUnidade']);
        $_SESSION['idProduto'] = $produto;
        header("Location: ../pages/produtoDescricao.php");
    }
?>

<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link href="../styles/paginaInicial.css" rel="stylesheet">
    <link href="../styles/footers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Street Food</title>
</head>

<body>
    <!--Menu-->
    <?php include '../commons/header.php'; ?>
    <!--Menu-->
    <!--opções de pizza--><br>
   <div class="pizzas">
    <div class="three_box">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=106">
                    <i><img src="../assets/sanduiche-de-abacate.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Sanduíche de abacate</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=106" class="btn btn-outline-danger">R$ 6.49</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=107">
                    <i><img src="../assets/clube-california-turquia.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Clube Califórnia Turquia</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=107" class="btn btn-outline-danger">R$ 6.49</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=108">
                    <i><img src="../assets/sanduiche-de-frango-de-bufalo.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Sanduíche de frango & búfalo</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=108" class="btn btn-outline-danger">R$ 6.99</a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <br>
    <div class="three_box">
        <div class="container">
           <div class="row">
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=109">
                    <i><img src="../assets/sanduiche-de-camarao-pipoca.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Sanduíche de camarão pipoca</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=109" class="btn btn-outline-danger">R$ 8.99</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=110">
                    <i><img src="../assets/tacos-de-frango-ranchero.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Tacos de Frango Ranchero</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=110" class="btn btn-outline-danger">R$6.99</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=111">
                    <i><img src="../assets/wrap-de-bufalo-e-frango.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Wrap de bufalo e frango</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=111" class="btn btn-outline-danger">R$ 3.99</a>
                 </div>
              </div>
           </div>
        </div>
     </div>
     <br>
     <br>
    
    <!--opções de pizza-->
    <!--Footer-->
    <?php include '../commons/footer.php'; ?>
    <!--Footer-->

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../scripts/paginaInicial.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>