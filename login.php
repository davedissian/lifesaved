<?php
session_start();
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
	<div class="row">
        <form method="POST" action="./backend/log.php" class="container box">

            <?php
            if(isset($_SESSION['naologado'])):
            ?>
                <div class="alert alert-danger" role="alert">
                Erro: Usuario ou senha invalidos!
                </div>
            <?php
            endif;
            unset($_SESSION['naologado']);
            ?>
        
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>
            <div class="col-sm-6 col-md-4 col-lg-3">
                <label for="senha" class="form-label">Senha</label>
                <input type="password" class="form-control" name="senha" id="senha" maxlength="8">
            </div>
            <button type="submit" class="btn cancel my-3">Entrar</button><br>
            <a href="usuario.php" class="col-sm-6 col-md-4 col-lg-3">Ainda não tem cadastro? Clique aqui!</a>
        </form>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>