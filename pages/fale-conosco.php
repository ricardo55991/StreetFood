<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../assets/favicon.ico" type="image/x-icon">
    <link href="../styles/home.css" rel="stylesheet">
    <link href="footers.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Street Food</title>
</head>

<body>
    <!--Menu-->
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
                            <a class="nav-link" href="home.php">Inicio</a>
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
                            <a class="nav-link" href="fale-conosco.php">Fale conosco</a>
                        </li>
                    </ul>
                </div>
                <div class="text-end">
                    <a href="login.php" class="btn btn-light">Entrar</a>
                    <a href="cadastre-se.php" class="btn btn-warning">Cadastre-se</a>
                </div>
            </div>
        </div>
    </nav>
    <!--Menu-->
    <!--Comunicado antes do forms-->
    <div class="texto-merchan">
        <h2>SAC</h2>
        <h5>Nós valorizamos a sua opinião e queremos ouvir sobre sua experiência em nossos restaurantes.</h5>
    </div>
    <!--Comunicado antes do forms-->
    <!--Formulário-->
    <div class="row g-3" style="margin: 20px;">
        <div class="col-sm-6">
          <label for="firstName" class="form-label">Nome</label>
          <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid first name is required.
          </div>
        </div>

        <div class="col-sm-6">
          <label for="lastName" class="form-label">Sobrenome</label>
          <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
          <div class="invalid-feedback">
            Valid last name is required.
          </div>
        </div>
    
        <label for="exampleFormControlInput1" class="form-label">E-mail</label>
        <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Informe seu e-mail">
      
        <label for="exampleFormControlTextarea1" class="form-label">Digite sua mensagem</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Digite sua mensagem, lembre-se que quanto mais informações melhor! Então por favor faça uma descrição completa da situação."></textarea>
      
      
        <label for="formFile" class="form-label">Tem algum registro do que ocorreu? Se sim, por favor nos envie.</label>
        <input class="form-control" type="file" id="formFile">
      
    </div>
    
    <!--Formulário-->
<!--Footer-->
    <div class="text-white bg-dark">
      <div class="b-example-divider"></div>
      <div class="container">
        <footer class="py-5">
          <div class="row">
      
            <div class="col-2">
              <ul class="nav flex-column">
                <a href="home.php">
                    <img src="../assets/logo.png" class="bi" width="65" height="65"></img>
                  </a>
                <li class="nav-item mb-2"><a href="sobre.php" class="nav-link p-0 text-muted">Sobre</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Localização</a></li>
                <li class="nav-item mb-2"><a href="fale-conosco.php" class="nav-link p-0 text-muted">Fale conosco</a></li>
              </ul>
            </div>
      
            <div class="col-2">
              <ul class="nav flex-column">
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Hambúrguer</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Pizza</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sanduiche</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Sobremesa</a></li>
                <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Bebidas</a></li>
              </ul>
            </div>
      
            <div class="col-4 offset-1">
              <form>
                <h5>Gostou dos nossos serviços?</h5>
                <p>Cadastre seu e-mail para receber nossas novidades e promoções.</p>
                <div class="d-flex w-100 gap-2">
                  <label for="newsletter1" class="visually-hidden">Insira seu e-mail</label>
                  <input id="newsletter1" type="text" class="form-control" placeholder="Insira seu e-mail">
                  <button class="btn btn-warning" type="button">Cadastrar</button>
                </div>
              </form>
            </div>
          </div>
 <br>     
          <div class="d-flex justify-content-between py-4 my-4 border-top">
            <ul class="nav justify-content-center border-bottom pb-3 mb-3"></ul>
            <p>&copy; 2022 Street Food, Todos os direitos reservados.</p>

          </div>
        </footer>
      </div>
    </div>
      
      
          <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <!--Footer-->


    <script src="../scripts/home.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
        crossorigin="anonymous"></script>
</body>

</html>