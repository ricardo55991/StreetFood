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
                 <a href="?produtoUnidade=121">
                    <i><img src="../assets/bolo-de-chocolate.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Bolo de chocolate</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=121" class="btn btn-outline-danger">R$ 4.99</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=122">
                    <i><img src="../assets/muffins-de-frutas-da-vovo.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Muffins de frutas da vovó</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=122" class="btn btn-outline-danger">R$ 5.99</a>
                 </div>
              </div>
              <div class="col-md-4">
                 <div class="box_text">
                 <a href="?produtoUnidade=123">
                    <i><img src="../assets/sorvete-feito-a-mao.jpg" style="width: 300px;" alt="#"/></i>
                 </a>
                    <h5>Sorvete feito à mão</h5>
                    <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                    <a href="?produtoUnidade=123" class="btn btn-outline-danger">R$ 5.99</a>
                 </div>
              </div>
           </div>
        </div>
     </div>
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