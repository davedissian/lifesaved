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

        <title> Sobre nós </title>
        <link rel="icon" href="images/logo/logo.png" type="text/image">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/profiles.css" type="text/css">

<<<<<<< HEAD
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
                  <h2> Meu Perfil </h2>
              </div>
          </div>
          <!-- Agrupamento de imagens -->
      
          <div class="content-image-box">
            <div class="margin-content">
                <div class="margin-content image-box first-column">
                  <figure>
                      <img id="photo" src="images/integrantes/daiana-integrante.jpeg" alt="Daiana Fernanda" title="Daiana Fernanda"><br/>
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
                      <input type="hidden" value="<?php echo $_SESSION['id_usuario'];?> "/>

                      <p> Email: <?php echo $_SESSION['email'];?> </p>
                      <p> CPF: <?php echo $_SESSION['cpf'];?> </p>
                      
                      <p> Telefone: <?php echo $_SESSION['telefone'];?>  </p>
                      <p>Sexo: <?php echo $_SESSION['sexo'];?> </p>

                    </figcaption>

                    <div class="margin-content">
                      <div class="button-style ">
                        <a href="editar-usuario.php">
                          <button type="submit" autofocus> Editar dados </button>  
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
=======
  <main class="container my-5 py-5">
    <input type="hidden" value="<?php echo $_SESSION['id_usuario'];?>"/>
    <h1><?php echo $_SESSION['nome'];?></h1>
      <p>
        Email: <?php echo $_SESSION['email'];?>
      </p>
      <p>
        CPF: <?php echo $_SESSION['cpf'];?>
      </p>
      <p>
        Tel: <?php echo $_SESSION['telefone'];?>
      </p>
      <p>
        Sexo: <?php echo $_SESSION['sexo'];?>
      </p>      

      <a href="editar-usuario.php">Editar perfil</a>   
      <a href="./backend/logout.php">Sair</a>    
  </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
</html>