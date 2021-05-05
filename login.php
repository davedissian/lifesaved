<?php
  session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title> Login | LifeSaved </title>
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="css/sign-in.css" type="text/css">

    </head>
    <body class="bg-color">
        <form method="POST" action="./backend/log.php">

            <div>
                <figure>
                <a href="index.php"><img src="images/logo/logo.png" alt="Logo do LifeSaved" title="Logo - LifeSaved"></a>
                </figure>
            </div>
    
            <fieldset>
                <legend hidden> Login </legend>

                <div class="inputs-content">
                    <div class="inputs">
                        <label for="e_mail"> Email </label><br/>
                        <input type="email" name="email" id="e_mail"><br/><br/>
                    </div>
    
                    <div class="inputs">
                        <label for="senha"> Senha </label><br/>
                        <input type="password" name="senha" id="senha" maxlength="20"><br/><br/>
                        <a href=""><p> Esqueceu a senha? </p></a>
                    </div>
                </div>

                <?php
                    if(isset($_SESSION['naologado'])):
                ?>   

                <div class="error">
                    Usuário ou senha invalidos
                </div>
                <?php

                    endif;
                    unset($_SESSION['naologado']);
                ?>

                <div class="button-style button-content">
                    <button type="submit"> ENTRAR </button>
                </div>

                <div class="paragraphs">
                    <p> Não tenho uma conta </p>
                    <b><a href="choose.php"> Cadastre-se </a></b>
                </div>
            </fieldset>
        </form>
    </body>
</html>