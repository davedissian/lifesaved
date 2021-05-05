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

        <title> Fale conosco </title>

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
                    <h4> Fale conosco </h4>
                    <h2> Envie seu feedback </h2>
                </div>
            </div>

            <!-- Formulário -->
            <form action="backend/fale.php" method="post"> 

                <fieldset>
                    <legend hidden> Contato </legend>

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

                    <div class="input-boxes">
                        <div class="margin-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                            </figure>
    
                            <div class="paragraph">
                                <label for="mensagem"> Mensagem </label><br/>
                            </div>
                        </div>

                        <textarea type="text" name="mensagem" cols="140" rows="10" id="mensagem" maxlength="2000"></textarea>
                    </div>
    
                    <div class="button-style">
                        <button type="submit" autofocus> Enviar </button>
                    </div>
                </fieldset>
            </form>
        </main>
    </body>
</html>