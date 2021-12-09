<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/conf/config.php");

$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : header('location:index.php');

$nome_grupo = isset($_POST['grupo_nome']) ? $_POST['grupo_nome'] : header('location:home.php?erro=4');

//Executando um select onde o id do usuário identifica os grupos dele e jogando na view
$query = $con->prepare("SELECT * FROM grupo WHERE nome_grupo LIKE CONCAT('%', :nome_grupo, '%') AND id_usuario = :id_usuario");

$query->bindParam(':nome_grupo', $nome_grupo);
$query->bindParam(':id_usuario', $id_usuario);

$query->execute();

$dados = $query->fetchAll();
