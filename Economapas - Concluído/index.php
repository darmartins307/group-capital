<?php
$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;



?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EconoMapa</title>
    <link rel="stylesheet" type="text/css" href="/Resources/style.css">
</head>

<body>
    <h2 id='titulo'> Bem vindo ao EconoMapa </h2>
    <div id="login">
        <div id="pefil">
            <img src="/public/perfil.jpg">
        </div>
        <form action="/App/Controller/ValidarUsuarioController.php" method="post">
            <label id="label_usuario"><strong>Usuário </strong> </label>
            <input type="text" required name="usuario" id="usuario">
            </br>
            <label id="label_senha"><strong>Senha</strong> </label>
            <input type="password" required name="senha" id="senha">
            </br>
            <?php
            //Testando se foi enviado algum erro via parâmetro get
            if ($erro == 1) {
                echo '<p style="color:red;margin-left:3px;margin-top:4px ;center;trasition-duration:0.5s;">Usuário ou senha inválidos </p>
    <style>
      
    </style>
    
    ';
            }
            ?>
            <input type="submit" value="Entrar" id="btn">
        </form>
    </div>
</body>

</html>