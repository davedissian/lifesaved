<?php
    session_start();
    require_once('conecta.php');

    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    $cep = $_POST['cep'];
    $rua = $_POST['rua'];
    $numero = $_POST['numero'];
    $complemento = $_POST['complemento'];
    $bairro = $_POST['bairro'];
    $cidade = $_POST['cidade'];
    $estado = $_POST['estado'];
    
    $query="UPDATE usuario SET nome='$nome', email='$email', cpf='$cpf', telefone='$telefone', sexo='$sexo', cep='$cep', rua='$rua', numero='$numero', complemento='$complemento', bairro='$bairro', cidade='$cidade', estado='$estado'  WHERE id_usuario = $id_usuario";
    $atualizar = mysqli_query($conexao, $query);
    if($atualizar){
        session_destroy();
        session_start();
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['sexo'] = $sexo;
        $_SESSION['cep'] = $cep;
        $_SESSION['rua'] = $rua;
        $_SESSION['numero'] = $numero;
        $_SESSION['complemento'] = $complemento;
        $_SESSION['bairro'] = $bairro;
        $_SESSION['cidade'] = $cidade;
        $_SESSION['estado'] = $estado;
        
        echo "<script>
                alert('Cadastro alterado');
                location.href='../perfil.php';
            </script>";
    } else {
        echo "<script>
                alert('Erro! Cadastro não foi alterado!!');
                location.href='../perfil.php';
            </script>";
    }
