<?php

    session_start();
    $_SESSION["email"] = $_POST["email"];
    $_SESSION["senha"] = $_POST["senha"];

    require_once 'conecta.php';

    $num_nome = strlen($_POST["nome"]);

    $senha = sha1($_POST["senha"]);
    //var_dump($senha);

    if(is_numeric($_POST["nome"])){

        echo "
            <script>
                alert ('Nome inválido');
                location.href = '../usuario.php';
            </script>
        ";

    }else{

        if($num_nome > 50){

            echo "
                <script>
                    alert ('Nome muito extenso');
                    location.href = '../usuario.php';
                </script>
            ";

        }else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
            echo "
                <script>
                    alert('E-mail inválido');
                    location.href = '../usuario.php';
                </script>
            ";
        
        }else{

            $checar_email = "SELECT email FROM usuario WHERE email = '".$_POST['email']."' ";

            $executa = mysqli_query($conexao, $checar_email);
            $achou_email = mysqli_num_rows($executa);
    
            if($achou_email == 1){
                echo "
                    <script>
                        alert('E-mail já cadastrado!');
                        location.href = '../usuario.php';
                    </script>
                ";
            }

            $checar_cpf = "SELECT cpf FROM usuario WHERE cpf = '".$_POST['cpf']."' ";


            $executar = mysqli_query($conexao, $checar_cpf);
            $achou_cpf = mysqli_num_rows($executar);

            if($achou_cpf == 1){
                echo "
                    <script>
                        alert('CPF já cadastrado!');
                        location.href = '../usuario.php';
                    </script>
                ";

            }else{
    
                /*
                $query = "INSERT INTO usuario(nome, senha, email, cpf, telefone, sexo) VALUES ('".$_POST['nome']."', '$senha', '".$_POST['email']."', '".$_POST['cpf']."', '".$_POST['telefone']."', '".$_POST['sexo']."' )";
                */
    
                $query = "INSERT INTO usuario (nome, senha, email, cpf, telefone, sexo) VALUES ('{$_POST['nome']}', '$senha', '{$_POST['email']}','{$_POST['cpf']}', '{$_POST['telefone']}', '{$_POST['sexo']}')";
    
                $cadastrar = mysqli_query($conexao, $query);
    
                if($cadastrar = true){
                    echo "
                        <script>
                            alert('Dados cadastrados com sucesso!');
                            location.href = '../usuario.php';    
                        </script>
                    ";

                }else{
                    echo "
                        <script>
                            alert('Falha ao cadastrar dados!');
                            location.href = '../usuario.php';
                        </script>
                    ";
                }
            }
        }
    }
?>