<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/conf/config.php");

$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : header('location:index.php');

//efetuando a exclusão
$id = isset($_GET['id']) ? $_GET['id'] : '';
$query = $con->prepare("DELETE FROM grupo WHERE id=:id");
$query->bindParam(':id', $id);
$query->execute();
header('location:../../home.php?exclusao=1');
