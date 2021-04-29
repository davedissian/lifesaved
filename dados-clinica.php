<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/clinics.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type=text/css>
        <link rel="stylesheet" href="css/contact.css">

        <title> Dados da clinica </title>
    </head>
    <body>

        <div class="margin-content">
            <figure>
                <a href="clinicas.php">
                    <img src="images/back/flecha.png" alt="">
                </a>
            </figure>
        </div>

        <main class="clinics-box-content">
            <section>
                <div class="margin-content clinic-box">
                    <div>
                        <figure>
                            <img src="images/outros/clinica.png" alt="Imagem da Clínica" title="Clínica">
                        </figure>
                    </div>
    
                    <?php
                    require_once './backend/conecta.php';
                    $id_clinica = $_GET['id'];
                    $clinica = "SELECT id_clinica, nome, email, cnpj, telefone, estado, descricao FROM clinica WHERE id_clinica = $id_clinica";
                    $executa = mysqli_query($conexao, $clinica);
                    $dados = mysqli_fetch_array($executa)
                    ?>

                    <div class="paragraph-content">
                        <div class="margin-content clinic-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone de Pílula" title="Ícone de Pílula - LifeSaved">
                            </figure>
                            <b> <input type="hidden" value="<?php echo $dados['id_usuario']?>">
                                    <h2><?php echo $dados['nome'];?></h2>
                            </b>
                        </div>
                        <div class="about-clinic">
                            <div>
                                <label for="estado" class="col-form-label">Estado: </label>
                                <p class="first-p" id="estado" name="estado"> <?php echo $dados['estado'];?> </p>
                            </div>
                            <div>
                                <label for="cnpj" class="col-form-label">CNPJ: </label>
                                <p class="first-p" id="cnpj" name="cnpj"> <?php echo $dados['cnpj'];?> </p>
                            </div>
    
                            <div>
                                <label for="email" class="col-form-label">E-mail: </label>
                                <p id="email" name="email"> <?php echo $dados['email'];?> </p>
                            </div>
    
                            <div>
                                <label for="telefone" class="col-form-label">Telefone: </label>
                                <p id="telefone" name="telefone"> <?php echo $dados['telefone'];?> </p>
                            </div>

                            <div>
                                <label for="descricao" class="col-form-label">Descrição: </label>
                                <p id="descricao" name="descricao"> <?php echo $dados['descricao'];?> </p>
                            </div>
    
                        </div>
                    </div>
                </div>
            </section>
        </main>     
        
    </div> 
    </body>
</html>