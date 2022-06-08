<?php
    session_start();

    global $pdo;

    try
    {
        // Conexão com o banco
        $pdo = new PDO("mysql:dbname=dbfood;host=localhost","root","usbw");
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e)
    {
        echo "O banco deu ruim!<br>".$e -> getMessage();
        exit; 
    }

    // // Consultas
    // $select = $pdo -> prepare("SELECT * FROM dbfood.cliente");
    // $select -> execute();
    // $resultado = $select -> fetchAll(PDO::FETCH_ASSOC);

    // // Exibição
    // echo "<pre>";
    // print_r($resultado);
    // echo "</pre>";

?>