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

<!--Menu-->
<?php include '../commons/header.php'; ?>
<!--Menu-->


<section class="container sproduct my-3 pt-6">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="../assets/sandwich1-440x440.jpg">
        </div>
        <div class="container col-lg-6 col-md-12 col-12">
            <h2>Hambúrguer de Bacon</h3>
                <h3 class="text-bold fw-bolder fs-5">R$10,99</h3>
                <input type="number" value="1">
                <button class="btn btn-warning mt-2 ">Adicionar ao pedido</button>
                <h4 class="mt-4 mb-4 fw-bolder">Detalhes do produto</h4>
                <span>Depois que você prova não entende o porquê comia só aquele hambúrguer simples com carne magra. O toque do bacon faz toda a diferença em qualquer prato e não seria diferente nesse.</span>
                <span>Feito com: Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate e churrasco da casa.</span>
                <i class="bi bi-clipboard-pulse"></i>
        </div>
</section>

<!--Footer-->
<?php include '../commons/footer.php'; ?>
<!--Footer-->

<script src="/scripts/home.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
</script>
</body>

</html>