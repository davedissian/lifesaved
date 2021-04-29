<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="css/clinics.css" type="text/css">
        <link rel="stylesheet" href="css/main.css" type=text/css>
        <link rel="stylesheet" href="css/contact.css">

        <title> Clínicas </title>
    </head>
    <body>

        <div class="margin-content">
            <figure>
                <a href="index.php">
                    <img src="images/back/flecha.png" alt="">
                </a>
            </figure>

            <div class="content-heading content">
                <h4> Clínicas </h4>
            </div>
        </div>

        <div>
            <figure class="search-content">
                <img src="images/outros/search.png" alt="Imagem de Lupa" title="Pesquisar">
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
    
                    <div class="paragraph-content">
                        <div class="margin-content clinic-content">
                            <figure>
                                <img src="images/logo/icone_pilula.png" alt="Ícone de Pílula" title="Ícone de Pílula - LifeSaved">
                            </figure>
                            <b> Clínica 1 </b>
                        </div>
                        <div class="about-clinic">
                            <div class="margin-content">
                                <p class="first-p"> CNPJ: 64.274.907/0001-21 </p>
                                <p> CEP: 04870-390 </p>
                            </div>
    
                            <div class="margin-content">
                                <p class="first-p"> Data de Início: 07/05/1988 </p>
                                <p> E-mail: clinica2@gmail.com </p>
                            </div>
    
                            <div>
                                <p>  Alguma informção  </p>
                                <p>  WhatsApp: 98720-1018 </p>
                            </div>
    
                            <div class="button-style">
								<a href="saibamais.html">
									<button href="saibamais.html"> Saiba mais </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <?php
					require_once './backend/conecta.php';
					$nomes = "SELECT * FROM clinica ORDER BY nome ASC";
					$executa = mysqli_query($conexao, $nomes);
					while($dados = mysqli_fetch_array($executa)){
				?>
					<input type="hidden" name="id_usuario" value="<?php echo $dados['id_usuario'] ?>">
					<a href="dados-clinica.php?id='<?php echo $dados['id_clinica'] ?>'" name="nome"><font color="black"><?php echo $dados['nome'] ?></font></a><br>
						
				<?php
				}
				?>
    </body>
</html>