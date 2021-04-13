<!-- Versão do documento HTML -->
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <!-- Configurando nossa página -->
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <!-- Descrição da sua página -->
        <meta name="description" content="Site com o objetivo de auxiliar na recuperação de dependentes químicos, em parceria com clínicas e recantos especializados">

        <!-- Palavras chaves, autor e tamanho da janela da página -->
        <meta name="keywords" content="Dependentes químicos, Recuperação">
        <meta name="author" content="Luke Yusuke">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title> LifeSaved </title>

        <!-- Links internos -->
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/reset.css" type="text/css">
        <link rel="icon" href="images/logo/logo.png" type="text/image">

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,300;0,400;1,700&display=swap" rel="stylesheet">

    </head>
    <body>
        <div class="bg-content">
            <div>
                <!-- Cabeçalho -->
                <?php
                require_once 'menu.html';
                ?>
            </div>
        </div>
        <main>
            <!-- Seções -->
            <section class="bg-color" id="boxes">
                <div class="content-heading">
                    <h4> Compromisso </h4>
                    <h2> Sobre o LifeSaved </h2>
                </div>

                <div class="box-content">
                    <div class="box">
                        <h4> Missão </h4>
                        <figure>
                            <img class="box-images" src="images/outros/target.png" alt="Imagem - Missão" title="Imagem - Missão">
                        </figure>
                        <p> Auxiliar dependentes químicos em sua recuperação, contando com parcerias de clínicas e recantos especializados  </p>
                    </div>

                    <div class="box">
                        <h4> Visão </h4>
                        <figure>
                            <img class="box-images" src="images/outros/visionary.png" alt="Imagem - Visão" title="Imagem - Visão">
                        </figure>
                        <p> Ser reconhecida nacionalmente e ajudar diversas pessoas que sofrem da dependência química </p>
                    </div>

                    <div class="box">
                        <h4> Valores </h4>
                        <figure>
                            <img class="box-images" src="images/outros/visitor.png" alt="Imagem - Valores" title="Imagem - Valores">
                        </figure>
                        <p> - Qualidade de serviço<br/>
                            - Pessoas vem primeiro<br/>
                            - Melhoria contínua<br/>
                        </p>
                    </div>
                </div>
            </section>

            <section id="about-us">
                <div class="content-heading">
                    <h4> Bem-Vindos ao LifeSaved </h4>
                </div>

                <div class="margin-content">
                    <figure class="person-image">
                        <img src="images/outros/pessoa-.png" alt="Pessoa" title="Pessoa">
                    </figure>
                    <div class="text-content">
                        <h2> Quem Somos </h2> 
                        <p> O LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamento O LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamento O LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamentoO LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamento O LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamento O LifeSaved é um projeto que tem como objetivo auxiliar os dependentes químicos em sua recuperação, através de parcerias com clínicas e recantos especializados neste tipo de tratamento
                            
                        <div class="button-style">
                            <a href="sobre-nos.html"><button> Contato </button></a>
                        </div> 
                    </div>
                </div>
            </section>

            <section class="bg-color-two" id="team">
                <div class="content-heading">
                    <h4> Nosso time </h4>
                    <h2> Equipe LifeSaved </h2>
                </div>

                <!-- Agrupamento de imagens -->
                <div class="dev-images">
                    <figure class="margin-content">
                        <div class="developers">
                            <img class="image-team"  src="images/integrantes/daiana-integrante.jpeg" alt="Daiana Fernanda" title="Daiana Fernanda">
                            <p> Daiana Fernanda </p>
                        </div>

                        <div id="images-spacing" class="developers">
                            <img class="image-team" src="images/integrantes/davi-integrante.jpeg" alt="Davi Oliveira" title="Davi Oliveira">
                            <p> Davi Oliveira </p>
                        </div>

                        <div class="developers">
                            <img class="image-team" src="images/integrantes/diego-integrante.jpeg" alt="Diego Avedissian" title="Diego Avedissian">
                            <p> Diego Avedissian </p>
                        </div>
                    </figure>

                    <figure class="margin-content">
                        <div class="developers">
                            <img class="image-team" src="images/integrantes/fabiana-integrante.jpeg" alt="Fabiana Macedo " title="Fabiana Macedo">
                            <p> Fabiana Macedo </p>
                        </div>

                        <div id="images-spacing" class="developers">
                            <img class="image-team" src="images/integrantes/gustavo-integrante.jpeg" alt="Gustavo Rodrigues" title="Gustavo Rodrigues">
                            <p> Gustavo Rodrigues </p>
                        </div>

                        <div class="developers">
                            <img class="image-team" src="images/integrantes/luke-integrante.jpeg" alt="Luke Yusuke" title="Luke Yusuke">
                            <p> Luke Yusuke </p>
                        </div>
                    </figure>
                </div>

                <div class="button-style">
                    <button> Saiba mais </button>  
                </div>

            </section>

            <!-- Rodapé -->
            <?php
            require_once 'footer.html';
            ?>
        </main>
    </body>
</html>