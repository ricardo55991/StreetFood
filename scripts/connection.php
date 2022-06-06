<?php
    // Conexão com o banco
    try
    {
        $pdo = new PDO("mysql:dbname=dbfood;host=localhost","root","usbw");
    }
    catch(PDOException $e)
    {
        echo "O banco deu ruim!<br>";
        echo $e -> getMessage();
    }

    // Consultas
    $select = $pdo -> prepare("SELECT * FROM dbfood.cliente");
    $select -> execute();
    $resultado = $select -> fetchAll(PDO::FETCH_ASSOC);

    // Exibição
    echo "<pre>";
    print_r($resultado);
    echo "</pre>";

?>