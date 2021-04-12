<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="css/contact.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/sign-in.css" type="text/css">

    <title> Login | LifeSaved </title>
  </head>

  <body class="bg-color">
    <form method="POST" action="./backend/log.php">

      <?php
        if(isset($_SESSION['naologado'])):
      ?>
              
      <div>
        Erro: Usuario ou senha invalidos!
      </div>

      <?php
        endif;
        unset($_SESSION['naologado']);
      ?>

      <div>
        <figure>
          <img src="images/logo/logo.png" alt="Logo do LifeSaved" title="Logo - LifeSaved">
        </figure>
      </div>
    
      <fieldset>
        <legend hidden> Login </legend>

        <div class="inputs-content">
          <div class="inputs">
              <label for="e_mail"> Email </label><br/>
              <input type="email" name="e-mail" id="e_mail"><br/><br/>
          </div>

          <div class="inputs">
              <label for="senha"> Senha </label><br/>
              <input type="password" name="senha" id="senha"><br/><br/>
              <a href=""><p> Esqueceu a senha? </p></a>
          </div>
        </div>

        <div class="button-style button-content">
            <button type="submit"> ENTRAR </button>
        </div>

        <div class="paragraphs">
            <p> Não tenho uma conta </p>
            <b><a href="usuario.php"> Cadastre-se </a></b>
        </div>
      </fieldset>
    </form>
  </body>
</html>