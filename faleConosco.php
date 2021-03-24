<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LifeSaved</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  </head>
  <body>

    <div class="container-fluid">
    <?php
    require_once('menu.html');
    ?>
    </div>

    <div class="container">
        <div class="container">
            <h5>Fale Conosco</h5>
        </div>
        <div class="container">
            <form method="POST" action="./backend/fale.php">
                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="email@email.com">
                </div>
                <div class="mb-3">
                    <label for="telefone" class="form-label">Telefone</label>
                    <input type="tel" class="form-control" name="telefone" id="telefone" placeholder="(xx) xxxxx-xxxx">
                </div>
                <div class="form-group">
                    <label for="textarea">Mensagem</label>
                    <textarea class="form-control" name="mensagem" placeholder="Digite sua mensagem aqui" id="textarea"
                        style="height: 100px"></textarea>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn button-send btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>

		<?php
    require_once('footer.html');
    ?>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>