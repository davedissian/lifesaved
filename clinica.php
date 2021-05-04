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
</html>