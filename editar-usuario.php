<?php
session_start();
require_once('./backend/check.php');
?>
<!DOCTYPE html>
<<<<<<< HEAD
<head>
        <!-- Configurações da página -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" href="images/logo/logo.png" type="text/image">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/style.css" type="text/css">
        <link rel="stylesheet" href="css/contact.css" type="text/css">
        <link rel="stylesheet" href="css/register.css" type="text/css">

        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

        <title> Área de Cadastro | Clínica </title>

    </head>
    <body>

        <!-- Conteúdo principal -->
        <main>
          <div class="margin-content">
            <figure>
              <a href="perfil.php">
                  <img src="images/back/flecha.png" alt="Flecha de ir para a Home" title="Voltar para Home">
              </a>
            </figure>
              
            <div class="content">
                <h2> Edição de Dados </h2>
            </div>
          </div>

          <!-- Formulário -->
          <form method="POST" action="./backend/update-user.php"> 
            <fieldset>
              <legend hidden> Contato </legend>

              <input type="hidden" class="list-group-item" value="<?php echo $_SESSION['id_usuario'];?> "/> 

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                      <figure>
                          <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                        <label for="nome"> Nome </label><br/>
                      </div>
                  </div>

                  <input id="nome" name="nome" value="<?php echo $_SESSION['nome'];?> " /> 
                </div>

                <div class="input-boxes">
                  <div class="margin-content">
                    <figure>
                      <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                    </figure>

                    <div class="paragraph">
                      <label for="email"> Email </label><br/>
                    </div>
                  </div>

                  <input id="email" name="email" value="<?php echo $_SESSION['email'];?> "/>
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                    <figure>
                      <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                    </figure>

                    <div class="paragraph">
                      <label for="cpf"> CPF </label><br/>
                    </div>
                  </div>

                  <input class="list-group-item" id="cpf" name="cpf" value="<?php echo $_SESSION['cpf'];?> "/> 
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                          <label for="cpf"> CPF </label><br/>
                        </div>
                    </div>

                    <input class="list-group-item" id="cpf" name="cpf" value="<?php echo $_SESSION['cpf'];?> "/>
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                      <figure>
                          <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                        <label for="telefone"> Telefone </label><br/>
                      </div>
                  </div>

                  <input id="telefone" name="telefone" value="<?php echo $_SESSION['telefone'];?>"/>
                </div>

                <div class="input-boxes">
                  <div class="margin-content">
                    <figure>
                      <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                    </figure>

                    <div class="paragraph">
                      <label for="sexo"> Sexo </label><br/>
                    </div>
                  </div>

                  <select id="sexo" name="sexo">
                  <optgroup>
                      <option value="<?php echo $_SESSION['sexo'];?>"><?php echo $_SESSION['sexo'];?></option>
                  </optgroup>

                    <option value="M"> Masculino </option>
                    <option value="F"> Feminino </option>
                    <option value="O"> Outro </option>
                </select>
                </div>
              </div>

              <div class="margin-content">
                <div class="button-style button-one">
                  <button> Alterar </button>
                  <button><a href="./backend/delete-user.php"> Deletar </a></button>
                </div>
              </div>
            </fieldset>
          </form>
        </main>
    </body>
</html>






















                
                



















































=======
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
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
