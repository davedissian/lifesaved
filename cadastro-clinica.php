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
                  <input type="text" name="nome" id="nome" maxlength="200" required>
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
                  <input type="email" name="email" id="email" required>
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
                    <input type="password" name="senha" id="senha" maxlength="20" required>
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
                    <input type="password" name="senha2" id="senha2" maxlength="20" required>
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
                        <label for="telefone"> Telefone </label><br/>
                      </div>
                  </div>
                  <input type="tel" name="telefone" id="telefone" maxlength="11" placeholder="ex:11999999999">
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                  <div class="margin-content">
                    <figure>
                      <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                    </figure>
                    <div class="paragraph">
                      <label for="descricao"> Descrição </label><br/>
                    </div>
                  </div>
                    <textarea name="descricao" id="descricao" maxlength="200"></textarea>                  
                </div>
              </div>

              <div class="margin-content">
                <div class="content">
                  <h2> Endereço </h2>
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="cep"> Digite seu cep </label><br/>
                        </div>
                    </div>
                    <input type="text" name="cep" id="cep" maxlength="9" placeholder="Ex: 08011-000" required>
                </div>
                
                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="rua"> Logradouro / Rua </label><br/>
                        </div>
                    </div>

                    <input type="text" name="rua" id="rua" maxlength="60" required>
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="numero"> Número </label><br/>
                        </div>
                    </div>

                    <input type="text" name="numero" id="numero" maxlength="5" required>
                </div>
              </div>

              <div class="margin-content"> 

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="complemento"> Complemento </label><br/>
                        </div>
                    </div>

                    <input type="text" name="complemento" id="complemento" maxlength="20" placeholder="Ex: Apto: 21 Bloco:2">
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="bairro"> Bairro / Vila </label><br/>
                        </div>
                    </div>

                    <input type="text" name="bairro" id="bairro" maxlength="50" required>
                </div>
              </div>

              <div class="margin-content"> 
                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="cidade"> Cidade </label><br/>
                        </div>
                    </div>

                    <input type="text" name="cidade" id="cidade" maxlength="60" required>
                </div>

                <div class="input-boxes">
                    <div class="margin-content">
                        <figure>
                            <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                        </figure>

                        <div class="paragraph">
                            <label for="estado"> UF / Estado </label><br/>
                        </div>
                    </div>
                    <input type="text" name="estado" id="estado" maxlength="20" required>
                  </div>
                </div>

              <?php
              require_once './backend/busca-cep.php';
              ?>

              <div class="margin-content">
                <div class="button-style ">
                  <button type="submit" autofocus> Cadastrar </button>
                </div>
              </div>

            </fieldset>
          </form>
        </main>
    </body>
</html>