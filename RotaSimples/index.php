﻿<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Página para realizar login">
        <meta name="author" content="Cesar">
        <link rel="icon" href="imagens/favicon.ico">

        <title>Entre com seus Dados</title>
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/signin.css" rel="stylesheet">
        <script src="js/ie-emulation-modes-warning.js"></script>

        <style>
            body {
                background-image: url("./img/fundo1.jpg");
            } 
        </style>

    </head>

    <body>
        <?php
        unset($_SESSION['usuarioId'], $_SESSION['usuarioNome'], $_SESSION['usuarioNivelAcesso'], $_SESSION['usuarioLogin'], $_SESSION['usuarioSenha']);
        ?>
        <div class="container">		
            <form class="form-signin" method="POST" action="valida_login.php"><br><br>            
                <center><img src="./img/rotaSimples.png" alt="logo" height="180" width="180"></center><br>

                <label for="inputEmail" class="sr-only">Usuário</label>
                <input type="text" name="usuario" class="form-control" placeholder="Digitar o Usuário" required autofocus><br />

                <label for="inputPassword" class="sr-only">Senha</label>
                <input type="password" name="senha" class="form-control" placeholder="Digite a Senha" required ><br>




                <button class="btn btn-lg btn-primary btn-block" type="submit" name="btnLogin">Acessar</button>



            </form>
            <p class="text-center text-danger">
                <?php
                if (isset($_SESSION['loginErro'])) {
                    echo $_SESSION['loginErro'];
                    unset($_SESSION['loginErro']);
                }
                ?>
            </p>
        </div> 



        <script src="js/ie10-viewport-bug-workaround.js"></script>
    </body>
</html>