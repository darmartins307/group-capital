<?php




try {

    $usuario = "root";
    $senha = "root@123";
    $con = new PDO("mysql:host=127.0.0.1", "root", "root@123");
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {

    echo "error:" . $e->getMessage();
}

//Criando banco de dados caso não existir.
$query = "CREATE DATABASE IF NOT EXISTS map";
$con->exec($query);

//Selecionando o banco de dados.
$query = "USE map";
$con->exec($query);

//Criando a tabela grupo caso não exista.
$query = "CREATE TABLE IF NOT EXISTS grupo(id int primary key not null auto_increment, id_usuario int, nome_grupo varchar(50), local1 varchar(30), local2 varchar(30), local3 varchar(30), local4 varchar(30), local5 varchar(30))";
$con->exec($query);

//Criando a tablea user caso não exista.
$query = "CREATE TABLE IF NOT EXISTS user(id int primary key not null auto_increment, nome varchar(55), senha varchar(55))";
$con->exec($query);

//Inserindo o usuário solicitado. 
$query = "INSERT INTO user(nome, senha) values ('joao', '1234')";
$con->exec($query);

//Inserindo o segundo usuário solicitado. 
$query = "INSERT INTO user(nome, senha) values ('maria', '5678')";
$con->exec($query);
