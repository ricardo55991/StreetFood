<?php 

require 'conexao.php';

if(isset($_SESSION['idUser']) && !empty($_SESSION['idUser']))
{
    require 'Usuario.class.php';
    $user = new Usuario();

    $listLogged = $user->logged($_SESSION['idUser']);
    $nomeUser = $listLogged['nome'];
}
else
{
    header("Location: ../pages/login.php");
}


?>