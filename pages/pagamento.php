<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <meta name="generator" content="Hugo 0.88.1">
  <title>Pagamento · Street Food</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/checkout/">



  <!-- Bootstrap core CSS -->
  <link href="../styles/bootstrap.min.css" rel="stylesheet">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="../styles/pagamento.css" rel="stylesheet">
</head>

<body class="bg-light">

  <div class="container">
    <main>
      <div class="py-5 text-center">
        <img class="d-block mx-auto mb-4" src="../assets/logo.png" alt="" width="72" height="72">
        <h2>Quase lá!</h2>
        <p class="lead">Por favor preencha as informações abaixo para realizarmos o seu pedido</p>
      </div>

      <div class="row g-5">
        <div class="col-md-5 col-lg-4 order-md-last">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-primary">Carrinho</span>
            <span class="badge bg-primary rounded-pill"><span id="numeroItens">0</span></span>
          </h4>
          <ul class="list-group mb-3">
            <!-- <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Nome do produto</h6>
            </div>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Second product</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$8</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Third item</h6>
              <small class="text-muted">Brief description</small>
            </div>
            <span class="text-muted">$5</span>
          </li> -->
            <li class="list-group-item d-flex justify-content-between">
              <span>Total</span>
              <strong id="total">R$ 0</strong>
            </li>
          </ul>

          <form class="card p-2">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Código promocional">
              <button type="submit" class="btn btn-secondary">Usar</button>
            </div>
          </form>
        </div>
        <div class="col-md-7 col-lg-8">
          <form class="needs-validation" novalidate>
            <div class="row g-3">
              <div class="col-12">
                <label for="Nome" class="form-label">Nome</label>
                <input type="text" class="form-control" id="Nome" placeholder="Insira seu nome">
                <div class="invalid-feedback">
                  Por favor informe seu nome.
                </div>
              </div>

              <div class="col-12">
                <label for="endereco" class="form-label">Endereço</label>
                <input type="text" class="form-control" id="endereco" placeholder="Informe seu endereço" required>
                <div class="invalid-feedback">
                  Por favor infome seu endereço.
                </div>
              </div>

              <div class="col-12">
                <label for="complemento" class="form-label">Complemento</label>
                <input type="text" class="form-control" id="complemento" placeholder="Informe um ponto de referência">
              </div>

              <hr class="my-4">

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="same-address">
                <label class="form-check-label" for="same-address">O endereço de entrega é o mesmo que meu endereço de cobrança</label>
              </div>

              <div class="form-check">
                <input type="checkbox" class="form-check-input" id="save-info">
                <label class="form-check-label" for="save-info">Salve esta informação para a próxima vez</label>
              </div>

              <hr class="my-4">

              <h4 class="mb-3">Forma de pagamento</h4>

              <div class="my-3">
                <div class="form-check">
                  <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                  <label class="form-check-label" for="credit">Cartão de crédito</label>
                </div>
                <div class="form-check">
                  <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                  <label class="form-check-label" for="debit">Cartão de débito</label>
                </div>
              </div>

              <div class="row gy-3">
                <div class="col-md-6">
                  <label for="cc-name" class="form-label">Nome no cartão</label>
                  <input type="text" class="form-control" id="cnome" placeholder="" required>
                  <small class="text-muted">Nome completo conforme exibido no cartão</small>
                  <div class="invalid-feedback">
                    O nome no cartão é obrigatório
                  </div>
                </div>

                <div class="col-md-6">
                  <label for="cc-number" class="form-label">Número do cartão</label>
                  <input type="text" class="form-control" id="cnumero" placeholder="" required>
                  <div class="invalid-feedback">
                    O número do cartão de crédito é obrigatório
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cc-expiration" class="form-label">Data de validade</label>
                  <input type="date" class="form-control" id="data-validade" placeholder="" required>
                  <div class="invalid-feedback">
                    Data de validade é obrigatório
                  </div>
                </div>

                <div class="col-md-3">
                  <label for="cvv" class="form-label">CVV</label>
                  <input type="text" class="form-control" id="cvv" placeholder="" required>
                  <div class="invalid-feedback">
                    Código de segurança é obrigatório
                  </div>
                </div>
              </div>
              <hr class="my-4">
              <button type="button" data-toggle="modal" data-target="#exampleModalCenter" class="w-100 btn btn-primary btn-lg">Realizar pagamento</button>
          </form>
        </div>
      </div>
    </main>
    

    <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">&copy; 2022 - Street Food</p>
    </footer>
  </div>

  <!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Pagamento Finalizado!</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      Seu pagamento foi realizado com sucesso! Aguarde os detalhes da compra no seu email.
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="fechar()">Fechar</button>
      </div>
    </div>
  </div>
</div>



  <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  <script src="form-validation.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

  <script>
    var quantidade = sessionStorage.getItem('valorTotal');
    var numeroItens = sessionStorage.getItem('incremento');
    document.getElementById('total').innerHTML = "R$" + quantidade;
    document.getElementById('numeroItens').innerHTML = numeroItens;

    function fechar(){
      sessionStorage.setItem('valorTotal', 0);
      sessionStorage.setItem('incremento', 0);
      window.location.href = "paginaInicial.php";
    };
  </script>
</body>

</html>