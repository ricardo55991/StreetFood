<?php 
require 'conexao.php';

//session_destroy();
$_SESSION['idUser'] = null;

header("Location: ../pages/login.php");
?>