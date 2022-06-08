<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link href="../styles/home.css" rel="stylesheet">
    <link href="../styles/footers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Street Food</title>
</head>

<body>
    <!--Menu-->
    <?php include '../commons/header.php'; ?>
    <!--Menu-->


    <!--Carrosel-->
    <div class="container-geral">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container-texto-carousel">
                        <img src="../assets/hamburguer-de-bacon.png" class="d-block w-100" alt="...">
                        <div class="texto-promo">
                            <h1>Bacon</h1>
                            <h2>Hambúrguer</h2>
                            <h5>Experimente essa explosão de sabor!</h5>
                            <a class="btn btn-warning" href="#" role="button">Comprar</a>
                            <div class="container-menu-itens carousel-caption d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-texto-carousel">
                        <img src="../assets/frango-frito.png" class="d-block w-100" alt="...">
                        <div class="texto-promo">
                            <h1>Quente & picante</h1>
                            <h2>Frango frito</h2>
                            <h5>Frango frito com o molho especial picante, curtiu? Vem experimentar!</h5>
                            <a class="btn btn-danger" href="#" role="button">Comprar</a>
                            <div class="container-menu-itens carousel-caption d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container-texto-carousel">
                        <img src="../assets/combo.png" class="d-block w-100" alt="...">
                        <div class="texto-promo">
                            <h1>Mega</h1>
                            <h2>Combo</h2>
                            <h5>Adiquira já o seu mega combo e economize até 30% em acompanhamentos e bebidas!</h5>
                            <a class="btn btn-warning" href="#" role="button">Comprar</a>
                            <div class="container-menu-itens carousel-caption d-none d-md-block"></div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <!--Carrosel-->

            <!--Cardápio-->
            <div class="container-cardapio">
                <a href="#">
                    <img src="../assets/hamburguer.jpg" class="w3-round" alt="Norway">
                </a>
                <a href="../pages/pizzas.php">
                    <img src="../assets/pizza.jpg" class="w3-round" alt="Norway">
                </a>
                <a href="#">
                    <img src="../assets/sanduiches.jpg" class="w3-round" alt="Norway">
                </a>
                <a href="#">
                    <img src="../assets/acompanhamentos.jpg" class="w3-round" alt="Norway">
                </a>
                <a href="#">
                    <img src="../assets/bebidas.jpg" class="w3-round" alt="Norway">
                </a>
                <a href="#">
                    <img src="../assets/sobremesas.jpg" class="w3-round" alt="Norway">
                </a>
            </div>
        </div>
        <!--Cardápio-->

        <!--Merchan-->
        <div class="texto-merchan">
            <h2>Favoritos da galera</h2>
            <h5>Experimente os queridinhos do Street food!</h5>
        </div>
        <!--Merchan-->

        <!--primeira coluna-->
        <div class="three_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/hamburguer-de-bacon.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Hambúrguer de Bacon</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho. </p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/hamburguer-jalapeno-angus.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Hambúrguer Jalapeno Angus</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/big-brekkie-hamburguer-de-churrasco.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Big Brekkie Hambúrguer de Churrasco</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--primeira coluna-->

        <!--segunda coluna-->
        <div class="three_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/pizza-toscana.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Pizza toscana</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho. </p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/pizza-margarita.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Pizza Margarita</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/pizza-safari-de-carne.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Pizza Safári de Carne</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--segunda coluna-->

        <!--terceira coluna-->
        <div class="three_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/sanduiche-de-abacate.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Sanduíche de abacate</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho. </p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/clube-california-turquia.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Clube Califórnia Turquia</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/sanduiche-de-frango-de-bufalo.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Sanduíche de frango de búfalo</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">Peça agora!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--terceira coluna-->

        <!--Propaganda-->
        <div class="entrega">
            <img src="../assets/propaganda.png" class="img-fluid" alt="...">
        </div>
        <!--Propaganda-->

        <div class="texto-merchan">
            <h2>Acompanhamentos</h2>
            <h5>Para cada prato principal, há um acompanhamento perfeito.</h5>
        </div>

        <!--Acompanhamentos-->
        <div class="three_box">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/chips-bufalo.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Chips de Búfalo</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho. </p>
                            <a href="#" class="btn btn-outline-danger">R$ 4,99</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/aneis-de-cebola.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Anéis de cebola</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">R$ 3,49</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/batatas-fritas.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Batatas fritas</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">R$ 3,99</a>
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
                            <a href="#"><img src="../assets/batata-em-rodelas.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Batata em rodelas</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho. </p>
                            <a href="#" class="btn btn-outline-danger">R$ 4,99</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/santa-fe-chicken-salad.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Santa Fe Chicken Salad</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">R$ 8,59</a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="box_text">
                            <a href="#"><img src="../assets/side-fresco-salad.jpg" style="width: 300px;" alt="#" /></a>
                            <h5>Side Fresco Salad</h5>
                            <p>Peito defumado, costelinha, linguiça defumada, bacon e cheddar com alface, tomate, churrasco da casa e rancho.</p>
                            <a href="#" class="btn btn-outline-danger">R$ 7,99</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <!--Acompanhamentos-->

        <!--Serviços-->
        <div class="servicos">
            <img src="../assets/servicos.png" class="img-fluid" alt="...">
        </div>
        <!--Serviços-->

        <!--Footer-->
        <?php include '../commons/footer.php'; ?>
        <!--Footer-->

        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../scripts/home.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>

</html>