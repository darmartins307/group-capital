<?php
//Conexão com banco de dados

try {

    $usuario = "root";
    $senha = "root@123";
    $con = new PDO("mysql:host=127.0.0.1;dbname=map", "root", "root@123");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "error:" . $e->getMessage();
}
