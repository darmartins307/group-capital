# group-capital
Projeto tem o intuito de listar, criar e excluir grupos de cidades. 


***OBS.: Readme feito para ambiente linux.***


*** Versão mysql 8.0.27 ***

<----------------------------------------------------->


*** Versão do php 7.3.11 ***

<----------------------------------------------------->


***Executar a aplicação local pelo start.sh***
1 - Executar utilizando o start.sh, apenas execute o arquivo start.sh que irá rodar a migration, criando o banco, tabelas e usuários solicitado e irá iniciar o servidor embutido do php;

1.1 - para acessar digite no navegador localhost:8000
<----------------------------------------------------->
***Executar sem utilizar o start.sh***
2 - Rodar a migration dentro de database e irá fazer a criação do banco de dados, tabelas e usuários solicitado;

            Comando: php migration.php

2.1 - Necessário rodar o servidor embutido do php na raiz do projeto para funcionar;

            Comando: php -S localhost:8000
            
2.2 - para acessar digite no navegador localhost:8000
<----------------------------------------------------->
