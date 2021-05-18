<?php
    session_start();
    require_once('conecta.php');

    $id_clinica = $_SESSION['id_clinica'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    
    $query="UPDATE clinica SET nome='$nome', email='$email', cnpj='$cnpj', telefone='$telefone', descricao='$descricao', cep='$cep', rua='$rua', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado'  WHERE id_clinica = $id_clinica";
    $atualizar = mysqli_query($conexao, $query);
    if($atualizar){
        session_destroy();
        session_start();
        $_SESSION['id_clinica'] = $id_clinica;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['cnpj'] = $cnpj;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['descricao'] = $descricao;
        $_SESSION['cep'] = $cep;
        $_SESSION['rua'] = $rua;
        $_SESSION['numero'] = $numero;
        $_SESSION['complemento'] = $complemento;
        $_SESSION['bairro'] = $bairro;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['estado'] = $estado;
        
        echo "<script>
                alert('Cadastro alterado');
                location.href='../perfil-clinica.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro! Cadastro não foi alterado!!');
                location.href='../editar-clinica.php';
            </script>";
    }
