<<<<<<< HEAD
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Configurações da página -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> LifeSaved | Minha clínica </title>
        <link rel="icon" href="images/logo/logo.png" type="text/image">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">
        <link rel="stylesheet" href="css/profiles.css" type="text/css">

        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    </head>
    <body class="bg-color-two">
        <!-- Conteúdo principal -->
      <main>
          <div class="margin-content">
            <figure>
                <a href="clinicas.php">
                  <img src="images/back/flecha.png" alt="Ícone de voltar" title="Voltar">
                </a>
            </figure>
            
            <div class="content-heading">
                <h2> Minha Clínica </h2>
            </div>
          </div>
          <!-- Agrupamento de imagens -->
      
          <div class="content-image-box">
            <div class="margin-content">
              <div class="margin-content image-box first-column">
                <figure>
                  <img id="photo" src="images/images/clinicas.jpg" alt="Clínica" title="Clinica">
                </figure>

                <div class="content-figure">
                  <figure>
                    <div class="margin-content content-paragraph">
                      <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">    

                      <?php
                        require_once './backend/conecta.php';
                        $id_clinica = $_GET['id'];
                        $clinica = "SELECT id_clinica, nome, email, cnpj, estado, telefone, descricao FROM clinica WHERE id_clinica = $id_clinica";
                        $executa = mysqli_query($conexao, $clinica);
                        $dados = mysqli_fetch_array($executa);
                      ?>
                    
                      <p> <?php echo $dados['nome'];?> </p>
                    </div>   
                      <p> Email: <?php echo $dados['email'];?> </p>
                      <p> CNPJ: <?php echo $dados['cnpj'];?> </p>
                      <p> Estado: <?php echo $dados['estado'];?> </p>
                      <p> Telefone: <?php echo $dados['telefone'];?>  </p>
                      <p> Descrição: <?php echo $dados['descricao'];?> </p>               
                  </figure>                                           
                </div>
              </div>
            </div>
          </div>
      </main>
    </body>
=======
<?php
session_start();
require_once('./backend/check.php');
?>
<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Life-Saved!</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

  <div class="container-fluid">
	
	</div>

  <main class="container my-5 py-5">
    <input type="hidden" value="<?php echo $_SESSION['id_usuario'];?>"/>
    <h1><?php echo $_SESSION['nome'];?></h1>
      <p>
        Email: <?php echo $_SESSION['email'];?>
      </p>
      <p>
        CNPJ: <?php echo $_SESSION['cnpj'];?>
      </p>
      <p>
        Estado: <?php echo $_SESSION['estado'];?>
      </p>
      <p>
        Tel: <?php echo $_SESSION['telefone'];?>
      </p>
      <p>
        Descrição: <?php echo $_SESSION['descricao'];?>
      </p>      

      <a href="editar-clinica.php">Editar perfil</a>   
      <a href="./backend/logout.php">Sair</a>    
  </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
</html>