<!DOCTYPE html>
<html lang="pt-br">
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
              <a href="choose.php">
                  <img src="images/back/flecha.png" alt="Flecha de ir para a Home" title="Voltar para Home">
              </a>
            </figure>
              
            <div class="content">
                <h4> Área de Cadastro </h4>
                <h2> Clínica </h2>
            </div>
          </div>

          <!-- Formulário -->
          <form action="./backend/clinic.php" method="post"> 
            <fieldset>
              <legend hidden> Contato </legend>

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                      <figure>
                          <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                        <label for="nome"> Nome da Clínica </label><br/>
                      </div>
                  </div>

                  <input type="name" name="nome" id="nome" maxlength="200">
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                      <figure>
                        <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                        <label for="email"> Digite seu email </label><br/>
                      </div>
                    </div>

                  <input type="email" name="email" id="email">
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="senha"> Digite sua senha </label><br/>
                        </div>
                    </div>

                    <input type="password" name="senha" id="senha" maxlength="20">
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="senha"> Confirme sua senha </label><br/>
                        </div>
                    </div>

                    <input type="password" name="senha2" id="senha" maxlength="20">
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="cpf"> CNPJ </label><br/>
                        </div>
                    </div>

                    <input type="text" name="cnpj" id="cnpj" maxlength="14" required>
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                          <label for="telefone"> Estado </label><br/>
                        </div>
                    </div>

                    <select name="estado">
                        <option value=""></option>
                        <?php
                            require_once './backend/conecta.php';
                            $query = "SELECT id_estado, nome FROM estados";
                            $executa = mysqli_query($conexao,$query);
                            while($estados = mysqli_fetch_array($executa)){
                                echo "<option value='$estados[nome]'>$estados[nome]</option>";
                            }
                        ?>
                    </select>
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

                  <input type="tel" name="telefone" id="telefone" maxlength="11" placeholder="ex:11999999999">
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                      <figure>
                        <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                        <label for="descricao"> Descrição </label><br/>
                      </div>
                    </div>

                  <input type="text" name="descricao" id="descricao" maxlength="200">
                </div>
              </div>

              <div class="margin-content">
                <div class="button-style button-one">
                  <button type="submit" autofocus> Cadastrar </button>
                </div>
              </div>
            </fieldset>
          </form>
        </main>
    </body>
</html>