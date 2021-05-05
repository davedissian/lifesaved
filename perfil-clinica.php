<?php
session_start();
require_once('./backend/check.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Configurações da página -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> Perfil da clinica </title>
        <link rel="icon" href="images/logo/logo.png" type="text/image">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/profiles.css" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    </head>
    <body class="bg-color-two">
        <!-- Conteúdo principal -->
      <main>
          <div class="margin-content">
              <figure>
                  <a href="index.php">
                      <img src="images/back/flecha.png" alt="Ícone de voltar" title="Voltar para a Home">
                  </a>
              </figure>
              <div class="content-heading">
                  <h2> Perfil da clínica </h2>
              </div>
          </div>
          <!-- Agrupamento de imagens -->
      
          <div class="content-image-box">
            <div class="margin-content">
                <div class="margin-content image-box first-column">
                  <figure>
                      <img id="photo" src="images/images/clinicas.jpg" alt="Daiana Fernanda" title="Daiana Fernanda"><br/>
                  </figure>

                  <div class="content-figure">
                    <figure>
                      <div class="margin-content content-paragraph">
                          <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone"><br/> 
                          <p> <?php echo $_SESSION['nome'];?> </p>
                      </div>
                    </figure>
      
                    <!-- Legenda da imagem -->
                    <figcaption>

                      <p> Email: <?php echo $_SESSION['email']?></p>
                      <p> CNPJ: <?php echo $_SESSION['cnpj']?></p>
                      <p> Estado: <?php echo $_SESSION['estado']?></p>
                      <p> Telefone: <?php echo $_SESSION['telefone']?></p>
                      <p> Sobre: <?php echo $_SESSION['descricao']?></p>

                    </figcaption>

                    <div class="margin-content">
                      <div class="button-style ">
                          <a href="editar-clinica.php">
                            <button type="submit" autofocus>Editar dados</button>
                          </a>
                          <a href="./backend/logout.php">
                            <button>Sair</button>
                          </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </div>
      </main>
    </body>
</html>