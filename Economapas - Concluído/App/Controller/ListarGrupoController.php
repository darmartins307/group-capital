<?php
require_once("{$_SERVER['DOCUMENT_ROOT']}/conf/config.php");

//Retornando para view a lista de todos os grupos
$query = $con->prepare("SELECT id ,nome_grupo, local1, local2, local3, local4, local5 FROM 
grupo WHERE id_usuario = :id_usuario
 ");
 
$query->bindParam(':id_usuario', $_SESSION['id_usuario']);

$query->execute();

$dados = $query->fetchAll();
