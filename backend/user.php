<?php
    //session_start();
    //$_SESSION["email"] = $_POST["email"];
    //$_SESSION["senha"] = $_POST["senha"];
    
    require_once 'conecta.php';

    $nome = $_POST['nome'];
    $senha1 = $_POST["senha"];
    $senha2 = $_POST["senha2"];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];

    if(is_numeric($nome)){
        echo "
            <script>
                alert ('Nome inválido');
                location.href = '../usuario.php';
                history.back();
            </script>
        ";

    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "
                <script>
                    alert('E-mail inválido');
                    location.href = '../usuario.php';
                    history.back();
                </script>
            ";
        
    } else if($senha1 != $senha2){
            echo "
                <script>
                    alert('Senhas não conferem!');
                    location.href = '../usuario.php';
                    history.back();
                </script>
            ";
            
    } else if($checar_email = "SELECT email FROM usuario WHERE email = '$email'"){
        $executa = mysqli_query($conexao, $checar_email);
        $achou_email = mysqli_num_rows($executa);
        if($achou_email == 1){
            echo "
                <script>
                    alert('E-mail já cadastrado!');
                    location.href = '../usuario.php';
                    history.back();
                </script>
            ";
    } else if ($checar_cpf = "SELECT cpf FROM usuario WHERE cpf = '$cpf'"){
        $executar = mysqli_query($conexao, $checar_cpf);
        $achou_cpf = mysqli_num_rows($executar);
        if($achou_cpf == 1){
            echo "
                <script>
                    alert('CPF já cadastrado!');
                    location.href = '../usuario.php';
                    history.back();
                </script>
            ";
    } else {
            $verificaJ = $cpf[9];
            $verificaK = $cpf[10];

            $J_letra = 10;
            $J_array = array();
            $J_soma = 0;
            for ($i = 0; $i <= 8; $i++) {
                $J_array[] = $cpf[$i] * $J_letra;
                $J_letra--;
                $J_soma = $J_soma + $J_array[$i];
            }

            $J_resto = $J_soma % 11;
            $J_subtracao = 11 - $J_resto;

                if ($J_subtracao > 9) {
                    $J = 0;
                } else {
                    $J = $J_subtracao;
                }

                $K_letra = 11;
                $K_array = array();
                $K_soma = 0;
                for ($ii = 0; $ii <= 9; $ii++) {
                    $K_array[] = $cpf[$ii] * $K_letra;
                    $K_letra--;
                    $K_soma = $K_soma + $K_array[$ii];
                }

                $K_resto = $K_soma % 11;
                $K_subtracao = 11 - $K_resto;
                    if ($K_subtracao > 9) {
                        $K = 0;
                    } else {
                        $K = $K_subtracao;
                    }
                    if ($verificaJ == $J && $verificaK == $K) { 
                        $senha = sha1($senha1);
                        $sql = "INSERT INTO usuario (nome, senha, email, cpf, telefone, sexo) VALUES ('$nome', '$senha', '$email','$cpf', '$telefone', '$sexo')";
                       
                        $cadastrar = $conexao->query($sql);
                            if($cadastrar){
                                echo "
                                    <script>
                                        alert('Dados cadastrados com sucesso!');
                                        location.href = '../index.php';    
                                    </script>
                                ";

                            } else {
                                echo "
                                    <script>
                                        alert('Erro ao cadastrar os dados!');
                                        location.href = '../usuario.php';
                                        history.back();
                                    </script>
                                ";
                             } 
                    } else {
                        echo "<script>
                                alert('CPF INVÁLIDO, TENTE NOVAMENTE!!');   
                                location.href='../usuario.php';
                                history.back();
                              </script>";
                        }
            }
        }
    }
?>
