<?php

if(isset($_POST['usuarioCadastro']) && !empty($_POST['usuarioCadastro']) && isset($_POST['senhaCadastro']) && !empty($_POST['senhaCadastro']))
{
	require 'conexao.php';
	require 'Usuario.class.php';

	$user = new Usuario();
	
	$usuarioCadastro = addslashes($_POST['usuarioCadastro']);
	$cpf = addslashes($_POST['cpf']);
    $emailCadastro = addslashes($_POST['emailCadastro']);
	$numTelefone = addslashes($_POST['numTelefone']);
    $dataNascimento = addslashes($_POST['dataNascimento']);
	$senhaCadastro = addslashes($_POST['senhaCadastro']);

	$user->cadastrar($usuarioCadastro, $cpf, $emailCadastro, $numTelefone, $dataNascimento, $senhaCadastro);
        
}



?>