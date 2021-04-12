<?php
    session_start();
    require_once('conecta.php');

    $id_usuario = $_SESSION['id_usuario'];
    $nome = $_POST['nome'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];
    $cpf = $_POST['cpf'];
    $telefone = $_POST['telefone'];
    $sexo = $_POST['sexo'];
    
    $query="UPDATE usuario SET nome='$nome', senha=sha1('$senha'), email='$email', cpf='$cpf', telefone='$telefone', sexo='$sexo'  WHERE id_usuario = $id_usuario";
    $atualizar = mysqli_query($conexao, $query);
    if($atualizar){
        session_destroy();
        session_start();
        $_SESSION['id_usuario'] = $id_usuario;
        $_SESSION['nome'] = $nome;
        $_SESSION['senha'] = $senha;
        $_SESSION['email'] = $email;
        $_SESSION['cpf'] = $cpf;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['sexo'] = $sexo;
        
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
