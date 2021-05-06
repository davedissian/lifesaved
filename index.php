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
                <header class="bg-color margin-content">
                    <figure>
                        <a href="index.php"><img src="images/logo/logo.png" id="logo" alt="Logo LifeSaved"/></a>
                    </figure>
    
                    <!-- Agrupamento de Links -->
                    <nav class="menu" id="link-spacing">
                        <div class="nav-container">
                            <ul>
                                <li><a href="clinicas.php">Clínicas</a></li>
                                <li><a href="fale-conosco.php"> Fale conosco</a></li>
                                <li><a href="sobre-nos.php"> Sobre nós </a></li>
<<<<<<< HEAD
                                <?php
                                    session_start();
                                    if(isset($_SESSION['cpf'])){
                                        echo '<a href="perfil.php">'.$_SESSION["nome"].'</a>';
                                    } else if (isset($_SESSION['cnpj'])){ 
                                        echo '<a href="perfil-clinica.php">'.$_SESSION["nome"].'</a>';
                                    } else {
                                        echo "<a href='login.php'><button> Entrar </button></a>";
                                    }
                                ?>                            
=======
                                <a href="login.php"><button> Entrar </button></a>
                                <?php
                                if(session_start()){
                                    echo $_SESSION['nome'];
                                }  
                                ?>
                                <a href="perfil.php">Perfil</a>   
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
                            </ul>
                        </div>
                    </nav>   
                </header>
            </div>

            <div class="bg-color content-heading font">
                <h1> LifeSaved </h1>
                <h2> Sua vida vale mais que uma sensação </h2>
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
                            <a href="fale-conosco.php"><button> Contato </button></a>
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
                    <a href="sobre-nos.php"><button href="sobre-nos.php"> Saiba mais </button></a>  
                </div>

            </section>

            <section class="bg-color" id="our-clients">
                <div class="content-heading">
                    <h4> Nossos clientes </h4>
                    <h2> Relatos </h2>
                </div>
                <div class="all-boxes">
                    <div class="content-boxes">
                        <address> 
                            <div class="client-address">
                                <figure>
                                    <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                                </figure>
                                <b> Gustavo Rodrigues </b>
                            </div>
                        </address>
                        <div class="comments-boxes">
                            <div class="comments">
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias dicta accusamus nemo ipsum tempore at recusandae, porro possimus eius quaerat magni repellat, error repellendus tempora ad modi hic vitae? Animi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus corporis aliquid repudiandae, hic distinctio perspiciatis ducimus aspernatur quae  </p>
                                <figure>
                                    <img src="images/logo/folha-verde.png" alt="Ícone de folha" title="Folha">
                                </figure>
                            </div>
                        </div>
                    </div>

                    <div class="content-boxes">
                        <address> 
                            <div class="client-address">
                                <figure>
                                    <img src="images/logo/icone_pilula.png" alt="">
                                </figure>
                                <b> Gustavo Rodrigues </b> 
                            </div>
                        </address>
                        <div class="comments-boxes">
                            <div class="comments">
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias dicta accusamus nemo ipsum tempore at recusandae, porro possimus eius quaerat magni repellat, error repellendus tempora ad modi hic vitae? Animi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus corporis aliquid repudiandae, hic distinctio perspiciatis ducimus aspernatur quae   </p>
                                <figure>
                                    <img src="images/logo/folha-verde.png" alt="Ícone de folha" title="Folha">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="content-boxes">
                        <address> 
                            <div class="client-address">
                                <figure>
                                    <img src="images/logo/icone_pilula.png" alt="Ícone" title="Ícone">
                                </figure>
                                <b> Gustavo Rodrigues </b> 
                            </div>
                        </address>
                        <div class="comments-boxes">
                            <div class="comments">
                                <p> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Molestias dicta accusamus nemo ipsum tempore at recusandae, porro possimus eius quaerat magni repellat, error repellendus tempora ad modi hic vitae? Animi. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Necessitatibus corporis aliquid repudiandae, hic distinctio perspiciatis ducimus aspernatur quae  </p>
                                
                                <figure>
                                    <img src="images/logo/folha-verde.png" alt="Ícone de folha" title="Folha">
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>    
            </section>

            <!-- Rodapé -->
            <footer>
                <div id="footer-spacing">
                    <div class="margin-content">
                        <figure>
                            <a href="" class="logo"><img src="images/logo/logo.png" alt="Logo - LifeSaved"></a>
                        </figure>
        
                        <div class="image-content">
                            <figure>
                                <a href=""><img src="images/footer/facebook.png" alt=""></a>
                                <a href=""><img src="images/footer/instagram.png" alt=""></a>                                           
                                <a href=""><img src="images/footer/whatsapp.png" alt=""></a>                                   
                            </figure>
                        </div>
                    </div>

                    <div class="margin-content">

                        <div class="content-footer">
                            <ul>
                                <a href=""><li> Clínica </li></a>
                                <a href="fale-conosco.php"><li> Fale conosco </li></a>
                                <a href="sobre-nos.php"><li> Sobre nós </li></a>
                            </ul>
                        </div>

                        <div class="content-footer">
                            <ul>
                                <a href=""><li> Metas </li></a>
                                <a href=""><li> Minhas clínicas </li></a>
                                <a href=""><li> Conquistas </li></a>
                            </ul>
                        </div>

                        <div class="content-footer">
                            <ul>
                                <a href="login.php"><li> Login </li></a>
                                <a href="cadastro-clinica"><li> Cadastro - Clínica </li></a>
                                <a href="cadastro-usuario"><li> Cadastro - Usuário </li></a>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
        </main>
    </body>
</html>