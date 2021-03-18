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

        <div class="container">
            <form action="./backend/clinic.php" method="post">
                <p>
                    <label for="nome"> Nome da Clínica <br/></label>
                    <input type="name" name="nome" id="nome" required> 
                </p>

                <p>
                    <label for="senha"> Digite sua senha <br/></label>
                    <input type="password" name="senha" id="senha" maxlength="8" required/>
                </p>

                <p>
                    <label for="email"> Digite seu e-mail <br/></label>
                    <input type="text" name="email" id="email" required>
                </p>

                <!-- Estado --> 
                <!-- Cidade -->

                <p>
                    <label for="cnpj"> CNPJ <br/></label>
                    <input type="text" name="cnpj" id="cnpj" required>
                </p>

                <p>
                    <label for="telefone"> Telefone <br/></label>
                    <input type="text" name="telefone" id="telefone" required>
                </p>

                <p>
                    <label for="descricao"> Descrição da Clínica <br/></label>
                    <input type="text" name="descricao" id="descricao" required>
                </p>

                <p>
                    <input type="submit" value="Cadastrar">
                </p>
            </form>
        </div>
    </div>
		
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>