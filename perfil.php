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
	<?php
	require_once('menu.html');
	?>
	</div>

  <main class="container my-5 py-5">
    <h1>Editar Perfil</h1>
    <form method="POST" action="./backend/update.php">
        <div class="card my-4">
            <ul class="list-group list-group-flush">

                <input type="hidden" class="list-group-item" value="<?php echo $_SESSION['id_usuario'];?>" /> 
                <input class="list-group-item" id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 
                <input class="list-group-item" id="email" name="email" value="<?php echo $_SESSION['email'];?> "/> 
                <input class="list-group-item" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>  
                <input type="password" class="list-group-item" id="senha" name="senha" value="<?php echo $_SESSION['senha'];?>"/>
                
                <button class="btn btn-primary p-1 my-1 border-none">Alterar</button>
                <a href="./backend/delete.php" class="btn btn-primary p-1 my-1 border-none">Deletar</a>
                <a href="./backend/logout.php" class="btn btn-primary p-1 my-1 border-none">Sair</a>

            </ul>
        </div>
    </form>
  </main>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>