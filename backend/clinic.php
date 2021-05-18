<?php
    require_once 'conecta.php';
    require_once 'cnpj.php';

    $senha1 = $_POST['senha'];
    $senha2 = $_POST['senha2'];

    if(is_numeric($_POST["nome"])){
        echo "
            <script>
                alert ('Nome inválido!');
                location.href = '../clinica.php';
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
    } else if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
        echo "
            <script>
                alert('E-mail inválido!');
                location.href = '../clinica.php';
                history.back();
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
                    history.back();
                </script>
            ";

    } else if (!is_numeric($_POST["telefone"])) {
        echo "
            <script>
                alert ('No campo TELEFONE digite somente NUMEROS');
                location.href = '../clinica.php';
                history.back();
            </script>
        ";
    } else if (!validaCnpj($_POST['cnpj'])){
        echo "
            <script>
                alert ('CNPJ inválido!');
                location.href = '../clinica.php';
                history.back();
            </script>
        ";
    } else if ($checar_cnpj = "SELECT cnpj FROM clinica WHERE cnpj = '".$_POST['cnpj']."' "){
            $executar = mysqli_query($conexao, $checar_cnpj);
            $achou_cnpj = mysqli_num_rows($executar);
            if($achou_cnpj == 1){
                echo "
                    <script>
                        alert('cnpj já cadastrado!');
                        location.href = '../usuario.php';
                        history.back();
                    </script>
                ";
    } else {  

        $nome = $_POST['nome'];
        $senha = sha1($_POST['senha']);
        $email = $_POST['email'];
        $cnpj = $_POST['cnpj'];
        $telefone = $_POST['telefone'];
        $descricao = nl2br($_POST['descricao']);
        $cep = $_POST['cep'];
        $rua = $_POST['rua'];
        $numero = $_POST['numero'];
        $complemento = $_POST['complemento'];
        $bairro = $_POST['bairro'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];

        $registro = "INSERT INTO clinica (nome, senha, email, cnpj, telefone, descricao, cep, rua, numero, complemento, bairro, cidade, estado) values ('$nome', '$senha', '$email','$cnpj', '$telefone', '$descricao', '$cep', '$rua', '$numero', '$complemento', '$bairro', '$cidade', '$estado')";
       
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
                    history.back();
                </script>
            ";
        }
        }
    }   
}
?>
