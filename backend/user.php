<?php
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
                location.href = '../cadastro-usuario.php';
                history.back();
            </script>
        ";

    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "
                <script>
                    alert('E-mail inválido');
                    location.href = '../cadastro-usuario.php';
                    history.back();
                </script>
            ";
        
    } else if($senha1 != $senha2){
            echo "
                <script>
                    alert('Senhas não conferem!');
                    location.href = '../cadastro-usuario.php';
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
            require_once 'cpf.php';
            if ($verificaJ == $J && $verificaK == $K) { 
                $senha = sha1($senha1);
                require_once 'foto.php';
                $sql = "INSERT INTO usuario (nome, senha, email, cpf, telefone, sexo, foto) VALUES ('$nome', '$senha', '$email','$cpf', '$telefone', '$sexo', '$nomefoto')";
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
