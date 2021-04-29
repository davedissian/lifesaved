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
    <h1>Editar Perfil</h1>
    <form method="POST" action="./backend/update.php">
        <div class="card my-4">
            <ul class="list-group list-group-flush">

                <input type="hidden" class="list-group-item" value="<?php echo $_SESSION['id_usuario'];?>" /> 
                <label for="nome">Nome</label>
                <input class="list-group-item" id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 
                <label for="email">email</label>
                <input class="list-group-item" id="email" name="email" value="<?php echo $_SESSION['email'];?> "/>
                <label for="cpf">cpf</label>
                <input class="list-group-item" id="cpf" name="cpf" value="<?php echo $_SESSION['cpf'];?> "/> 
                <label for="telefone">telefone</label>
                <input class="list-group-item" id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>
                <label for="sexo">sexo</label>
                <select class="list-group-item" id="sexo" name="sexo">
                  <optgroup>
                      <option value="<?php echo $_SESSION['sexo'];?>"><?php echo $_SESSION['sexo'];?></option>
                  </optgroup>
                  <option value="M">Masculino</option>
                  <option value="F">Feminino</option>
                  <option value="O">Outro</option>
                </select>
                
                <button class="btn btn-primary p-1 my-1 border-none">Alterar</button>
                <a href="./backend/delete.php" class="btn btn-primary p-1 my-1 border-none">Deletar</a>
                <a href="./backend/logout.php" class="btn btn-primary p-1 my-1 border-none">Sair</a>

            </ul>
        </div>
    </form>
  </main>

  <?php
	require_once('footer.html');
	?>
  
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>