<?php
require_once("App/Controller/PesquisarGrupoController.php");

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

            $('#btn_excluir').click(function() {
                alert('Você quer excluir o grupo?');
            });

            setTimeout(function() {
                $('#inserido').fadeOut('fast');
            }, 1000);
            setTimeout(function() {
                $('#exclusao').fadeOut('fast');
            }, 1000);

        });
    </script>
</head>

<body>
    <div class="col-xs-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img id="logo" src="/public/logo2.jpg" ; <a class="navbar-brand" href="#">ECONOMAPA</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" style="margin-top:7px" href="criar-grupo.php">Criar grupo</a>
                    </li>
                    <li>
                        <form action="pesquisar-grupo.php" method="POST">
                            <input type="text" style="margin-left: 560px; width: 215px;" class="form-control" name="grupo_nome" placeholder="Digite o nome do grupo">
                    </li>
                    <input type="submit" class="btn btn-info" value="Pesquisar">
                    <li>

                        </form>
                    </li>
                    <li>
                        <a style="color:red; margin-left:100px; margin-top: 10px" class="nav-link" href="Logout.php"> Sair</a>
                    </li>
                </ul>
        </nav>
        <?php
        if ($_GET['inserido'] == 1) {
            echo ' <div id="inserido" class="alert alert-success" role="alert"> Grupo inserido com sucesso</div>';
        }
        if ($_GET['exclusao'] == 1) {
            echo ' <div id="exclusao" class="alert alert-success" role="alert"> Grupo excluído com sucesso</div>';
        }
        ?>
        <h3 style="text-align: center; margin-top: 10px"> Grupo encontrados </h3>
        <div class="col-lg-4 d-flex align-items-stretch">
            <?php

            foreach ($dados as $dados) {
                echo ('
<ul style="display: inline-block; list-style: none;" >
<div class="card-group">
<li>
<div id="card" class="card" style="width: 18rem; border-radius: 20px;">
<img class="card-img-top" src="/public/mapa2.png" alt="Card image cap">
<div class="card-body">
    <h5 class="card-title">' . $dados['nome_grupo'] . '</h5>
    <p class="card-text">' . $dados['local1'] . '</p>
    <p class="card-text">' . $dados['local2'] . '</p>
    <p class="card-text">' . $dados['local3'] . '</p>
    <p class="card-text">' . $dados['local4'] . '</p>
    <p class="card-text">' . $dados['local5'] . '</p>
    <form action="/App/Controller/ExcluirGrupoController.php?id=' . $dados['id'] . '" method="post">
        <button type="submit" style="margin-right:9px; margin-bottom: 10px" id="btn_excluir" class="btn btn-danger"> Excluir </button>
    </form>
</div>
</div>
</div>
</li>
</ul>
');
            } ?>
        </div>
    </div>
</body>

</html>