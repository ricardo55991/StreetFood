<?php

if(isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha']))
{
	require 'conexao.php';
	require 'Usuario.class.php';

	$user = new Usuario();
	
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);

	if($user->login($email, $senha) == true){
		if(isset($_SESSION['idUser'])){
			header("Location: ../pages/paginaInicial.php");
		}
		else{
			header("Location: ../pages/login.php");
		}
	} else{
		header("Location: ../pages/login.php");
	}
}
else{
	header("Location: ../pages/login.php");
}


?>