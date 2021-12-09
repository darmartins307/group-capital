<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/conf/config.php");

//pegando id da sessão
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : header('location:/index.php');

//pegando nome do grupo e testando
$nome_grupo = isset($_POST['name_group']) ? trim($_POST['name_group']) : header('location:../../view_create_grupo.php?erro=3');


$options = $_POST['options'];

if (empty($options) || !isset($options) || $option === '') {
    header('location:../../criar-grupo.php?erro=2');
}

//validando se o nome é vazio
if (!isset($nome_grupo) || empty($nome_grupo)) {
    header('location:../../criar-grupo.php?erro=3');
}

//preparando a query 
$sql = $con->prepare("INSERT INTO grupo(id_usuario,nome_grupo , local1, local2, local3, local4, local5) VALUES (:id_usuario, :nome_grupo, :local1, :local2, :local3, :local4, :local5)");

//setando valores na query
$sql->bindParam(':id_usuario', $id_usuario);
$sql->bindParam(':nome_grupo', $nome_grupo);

// percorrendo o array option pegano chave => valor pra jogar no banco.
foreach ($options as $optKey => $optValue) {

    //validando se a opção é vazia, se 
    $key = $optKey + 1;
    $sql->bindValue(":local{$key}", $optValue);
}


//executando a query
$result = $sql->execute();

//roteando para o home
header('location:/home.php?inserido=1');
