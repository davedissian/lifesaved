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

        <title> Área de Cadastro | Usuário </title>

    </head>
    <body>

        <!-- Conteúdo principal -->
        <main>
          <div class="margin-content">
            <figure>
              <a href="index.php">
                  <img src="images/back/flecha.png" alt="Flecha de ir para a Home" title="Voltar para Home">
              </a>
            </figure>
              
            <div class="content">
                <h4> Área de Cadastro </h4>
                <h2> Usuário </h2>
            </div>
          </div>

          <!-- Formulário -->
          <form action="./backend/user.php" method="post"> 
            <fieldset>
              <legend hidden> Contato </legend>

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                      <figure>
                          <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                      </figure>

                      <div class="paragraph">
                          <label for="nome"> Nome completo </label><br/>
                      </div>
                  </div>

                  <input type="name" name="nome" id="nome">
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

                    <input type="password" name="senha" id="senha">
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

                    <input type="senha" name="senha2" id="senha">
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

                    <input type="text" name="cpf" id="cpf" maxlength="11" required>
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                          <label for="telefone"> Telefone </label><br/>
                        </div>
                    </div>

                    <input type="text" name="telefone" id="telefone" maxlength="11" required>
                </div>
              </div>

              <div class="margin-content">
                <div class="button-style button-one">
                  <button type="submit" autofocus> Cadastrar </button>
                </div>
  
                <div class="button-style button-two">
                  <button type="submit" autofocus> Cancelar </button>
                </div>
              </div>

            </fieldset>
          </form>
        </main>
    </body>
</html>