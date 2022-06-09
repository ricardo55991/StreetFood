<?php

require 'conexao.php';

if (isset($_SESSION['idProduto']) && !empty($_SESSION['idProduto']))
{
	require 'Usuario.class.php';
    $user = new Usuario();

    $listLogged = $user->detalhes($_SESSION['idProduto']);
    $nomeProduto = $listLogged['nome'];
    $detalhesProduto = $listLogged['descricao'];
    $precoProduto = $listLogged['preco'];
    $imagemProduto = $listLogged['imagem'];
    
    echo '<section class="container sproduct my-3 pt-6">
    <div class="row mt-5">
        <div class="col-lg-5 col-md-12 col-12">
            <img class="img-fluid w-100 pb-1" src="'. $imagemProduto .'">
        </div>
        <div class="container col-lg-6 col-md-12 col-12">
            <h2>'. $nomeProduto .'</h3>
                <h3 class="text-bold fw-bolder fs-5">R$'. $precoProduto .'</h3>
                <input type="number" value="1">
                <button class="btn btn-warning mt-2 ">Adicionar ao pedido</button>
                <h4 class="mt-4 mb-4 fw-bolder">Detalhes do produto</h4>
                <span>'. $detalhesProduto .'</span>
                <i class="bi bi-clipboard-pulse"></i>
        </div>
</section>';

}
else {
    header("Location: ../pages/paginaInicial.php");
}

?>