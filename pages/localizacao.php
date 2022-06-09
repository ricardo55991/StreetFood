<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link href="../styles/paginaInicial.css" rel="stylesheet">
    <title>Street Food</title>
</head>

<body>
    <!--Menu-->
    <?php include '../commons/header.php'; ?>
    <!--Menu-->

    <div class="mapa">
    <div class="container my-4 col-md-12">
        <div style="display:inline-block;vertical-align:top;">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d127020.60413702394!2d-35.292285059556185!3d-5.799914645930439!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b3aaac26460531%3A0x5d8b404cf00fed69!2sNatal%2C%20RN!5e0!3m2!1spt-BR!2sbr!4v1654657913065!5m2!1spt-BR!2sbr" style="width: 1100px; height:300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>
        <div class="card my-4 col-md-12 border-0" style="width: 1100px; height:150px;">
            <div class="card-body">
                <h5 class="card-title align-items-center">
                    <i class="fa-duotone fa-burger"></i>
                </h5>
                <p class="card-text text-center">Este é o seu localizador de hambúrguer. Use-o para encontrar hambúrgueres perto de você. Ou sanduíches de frango, ou milkshakes, ou qualquer outra coisa que você queira da StreetFoods. Confira o horário de atendimento do restaurante, os menus locais, quais locais oferecem serviço de bufê e muito mais.</p>
            </div>
        </div>
    </div>
    </div>
    
    <section id="avaliacoes">
        <div id="heading-avaliacoes">
            <span>Avaliações</span>
        </div>

        <div class="avaliacao-box-container">
            <div class="avaliacao-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Luiz Felipe</strong>
                            <span>@luizfelipe</span>
                        </div>
                    </div>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="comentario-cliente">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ad consequatur iste dolorem, commodi laboriosam obcaecati similique maxime? Totam cum consequatur alias quae, velit molestias exercitationem deleniti eligendi nulla facilis!</p>
                </div>
            </div>
            <div class="avaliacao-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Lívia Costa</strong>
                            <span>@liviacosta</span>
                        </div>
                    </div>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="comentario-cliente">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ad consequatur iste dolorem, commodi laboriosam obcaecati similique maxime? Totam cum consequatur alias quae, velit molestias exercitationem deleniti eligendi nulla facilis!</p>
                </div>
            </div>
            <div class="avaliacao-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Anderson Silva</strong>
                            <span>@andersonsilva</span>
                        </div>
                    </div>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                </div>
                <div class="comentario-cliente">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ad consequatur iste dolorem, commodi laboriosam obcaecati similique maxime? Totam cum consequatur alias quae, velit molestias exercitationem deleniti eligendi nulla facilis!</p>
                </div>
            </div>
            <div class="avaliacao-box">
                <div class="box-top">
                    <div class="profile">
                        <div class="name-user">
                            <strong>Eduarda Bragança</strong>
                            <span>@eduardabragança</span>
                        </div>
                    </div>
                    <div class="reviews">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="far fa-star"></i>
                    </div>
                </div>
                <div class="comentario-cliente">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis ad consequatur iste dolorem, commodi laboriosam obcaecati similique maxime? Totam cum consequatur alias quae, velit molestias exercitationem deleniti eligendi nulla facilis!</p>
                </div>
            </div>
    </section>

    <!--Footer-->
    <?php include '../commons/footer.php'; ?>
    <!--Footer-->


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</body>
<style>
.blockquote {
    background-color: #F9F9F9;
    font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    font-size: 50px 25px;
}

.card {
    font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    font-size: 20px;
    box-shadow: 10px 10px 10px #a1a0a0;
}

.heading-avaliacoes {
    font-family: 'Gill Sans', 'Gill Sans MT', 'Trebuchet MS', sans-serif;
    box-sizing: border-box;
}

.avaliacoes {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    width: 100%;
}

#heading-avaliacoes {
    letter-spacing: 1px;
    margin: 30px 0px;
    padding: 10px 20px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#heading-avaliacoes span {
    font-size: 1.3rem;
    color: #252525;
    margin-bottom: 10px;
    letter-spacing: 2px;
    text-transform: uppercase;

}

.avaliacao-box-container {
    display: flex;
    justify-content: center;
    align-items: center;
    flex-wrap: wrap;
    width: 100%;
}

.avaliacao-box {
    width: 500px;
    box-shadow: 2px 2px 30px rgba(0, 0, 0, 0.1);
    background-color: #ffff;
    padding: 20px;
    margin: 15px;
    cursor: pointer;
}

.profile-img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    overflow: hidden;
    margin-right: 10px;
}

.profile-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    object-position: center;
}

.profile {
    display: flex;
    align-items: center;
}

.name-user {
    display: flex;
    flex-direction: column;
}

.name-user strong {
    color: #3d3d3d;
    font-size: 1.1rem;
    letter-spacing: 0.5px;
}

.name-user span {
    color: #979797;
    font-size: 0.8rem;
}

.reviews {
    color: #f9d71c;
}

.box-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 20px;
}

.comentario-cliente p {
    font-size: 0.9rem;
    color: #4b4b4b;
}

body .mapa{
    justify-content: center;
    margin-left: 160px;
}
</style>

</html>