<?php
    require_once 'conecta.php';

    $num_nome = strlen($_POST["nome"]);
    $senha = sha1($_POST["senha"]);

    if(is_numeric($_POST["nome"])){
        echo "
            <script>
                alert ('Nome inválido!');
                location.href = '../clinica.php';
            </script>
        ";
    } else if ($num_nome > 50){
            echo "
                <script>
                    alert ('Nome muito extenso. Max. 50 caracteres!');
                    location.href = '../clinica.php';
                </script>
            ";
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        echo "
            <script>
                alert('E-mail inválido!');
                location.href = '../clinica.php';
            </script>
        ";
        
    } else if ($checar_email = "SELECT email FROM clinica WHERE email = '".$_POST['email']."' "){
        $executa = mysqli_query($conexao, $checar_email);
        $achou_email = mysqli_num_rows($executa);

        if($achou_email == 1){
            echo "
                <script>
                    alert('E-mail já cadastrado!');
                    location.href = '../clinica.php';
                </script>
            ";

    } else {

            $registro = "INSERT INTO clinica (nome, senha, email, cnpj, telefone, descricao) values (('{$_POST['nome']}', '$senha', '{$_POST['email']}','{$_POST['cnpj']}', '{$_POST['telefone']}', '{$_POST['descricao']}')";

            $cadastro = mysqli_query($conexao, $registro);

            if($cadastro = true){
                echo "
                    <script>
                        alert('Dados cadastrados com sucesso!');
                        location.href = '../index.php';
                    </script>
                ";

            } else {
                echo "
                    <script>
                        alert('Falha ao cadastrar dados!');
                        location.href = '../clinica.php';
                    </script>
                ";
            }
        }
    }   
?>

