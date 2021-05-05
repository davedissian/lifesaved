<?php
session_start();
require_once('./backend/check.php');
?>
<!DOCTYPE html>
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






















                
                



















































