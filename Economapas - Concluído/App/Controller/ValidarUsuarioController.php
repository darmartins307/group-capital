<?php

require_once("../../conf/config.php");

//Pegando os parâmetros via post e protegendo
$usuario = stripcslashes($_POST['usuario']);
$senha = stripcslashes(($_POST['senha']));

//Preparando a query para ser executada 
$sql = $con->prepare("SELECT * FROM user WHERE nome=:usuario AND senha= :senha");

//Passando os parâmetros para completar a query
$sql->bindParam(':usuario', $usuario);
$sql->bindParam(':senha', $senha);

//executando query
$resultado = $sql->execute();

$dados = $sql->fetchAll();



//Verificando se o resultado foi diferente de 0, caso for usuário existe.
$rows = $sql->fetch(PDO::FETCH_ASSOC);
if (($sql) && $sql->rowCount() != 0) {
  header('location:../../home.php');
  foreach ($dados as $dados) {
    $_SESSION['id_usuario'] = ($dados['id']);
  }
} else {

  //Redirecionado o usuário sem acesso para a tela de login
  header('location:../../index.php?erro=1');
}
