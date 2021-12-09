<?php

require_once("{$_SERVER['DOCUMENT_ROOT']}/conf/config.php");
$id_usuario = isset($_SESSION['id_usuario']) ? $_SESSION['id_usuario'] : header('location:index.php');


?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/Resources/style_home.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <title>EconoMapa</title>

    <script>
        $(document).ready(function() {

            setTimeout(function() {
                $('.error').fadeOut('fast');
            }, 1000);

        });
    </script>
</head>
<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <img id="logo" src="/public/logo2.jpg" <a class="navbar-brand" href="home.php">EconoMapa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="home.php">Home</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<?php
if (isset($_GET['erro']) && $_GET['erro'] == 2) {
    echo '<div class="erro" class="alert alert-danger" role="alert"> Selecione de pelo menos 1 campo </div>';
}

if (isset($_GET['erro']) && $_GET['erro'] == 3) {
    echo '<div class="erro" class="alert alert-danger" role="alert"> Preencha o nome do grupo! </div>';
}
?>
<h3 style="text-align: center; margin-top: 10px"> Criar um grupo de cidades </h3>
<form action="/App/Controller/CriarGrupoController.php" method="post">
    <label class="nome_grupo" style="margin-left:25px; font-weight: bold;"> Nome do seu grupo </label></br>
    <input class="nome_grupo" required type="text" style="margin-right:30px" name="name_group" placeholder="Digita o nome do seu grupo">
    </br>
    <hr>
    <?php for ($i = 1; $i <= 5; $i++) { ?>
        <h3> Localização </h3>
        <hr>
        <select name="options[]">
            <option value=''> -- selecione uma opção -- </option>
            <option value=" Rio Branco - AC"> Rio Branco - AC </option>
            <option value=" Meceió - AL "> Meceió - AL </option>
            <option value=" Macapá - AP"> Macapá - AP</option>
            <option value=" Manaus - AM"> Manaus - AM </option>
            <option value=" Salvador - BH"> Salvador - BH </option>
            <option value=" Fortaleza - CE"> Fortaleza - CE </option>
            <option value=" Vitória - ES"> Vitória - ES </option>
            <option value=" Goiânia - GO"> Goiânia - GO </option>
            <option value=" São Luís - MA"> São Luís - MA </option>
            <option value=" Cuiabá - MT"> Cuiabá - MT </option>
            <option value=" Campo Grande - MS "> Campo Grande - MS </option>
            <option value=" Belo Horizonte - MG"> Belo Horizonte - MG </option>
            <option value=" Belém - PA "> Belém - PA </option>
            <option value=" João Pessoa - PB "> João Pessoa - PB </option>
            <option value=" Curitíba - PR"> Curitíba - PR </option>
            <option value=" Recife - PE"> Recife - PE </option>
            <option value=" Teresina - PI"> Teresina - PI </option>
            <option value=" Rio de Janeiro - RJ"> Rio de Janeiro - RJ </option>
            <option value=" Natal - RN"> Natal - RN </option>
            <option value=" Porto Alegre - RS"> Porto Alegre - RS </option>
            <option value=" Porto Velho - RO"> Porto Velho - RO </option>
            <option value=" Boa vista - RR"> Boa vista - RR </option>
            <option value=" Florianópolis - SC"> Florianópolis - SC </option>
            <option value=" São Paulo - SP "> São Paulo - SP </option>
            <option value=" Palmas - TO"> Palmas - TO </option>
            <option value=" Brasília - DF "> Brasília - DF </option>
        </select></br>
    <?php } ?>
    <input type="submit" id="btn" value="Cadastrar grupo" name="btn_submit">
</form>

<body>
</body>

</html>