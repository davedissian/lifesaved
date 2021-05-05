<?php
    session_start();
    require_once('conecta.php');

    $id_clinica = $_SESSION['id_clinica'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $cnpj = $_POST['cnpj'];
    $estado = $_POST['estado'];
    $telefone = $_POST['telefone'];
    $descricao = $_POST['descricao'];
    
    $query="UPDATE clinica SET nome='$nome', email='$email', cnpj='$cnpj', estado='$estado', telefone='$telefone', descricao='$descricao'  WHERE id_clinica = $id_clinica";
    $atualizar = mysqli_query($conexao, $query);
    if($atualizar){
        session_destroy();
        session_start();
        $_SESSION['id_clinica'] = $id_clinica;
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['cnpj'] = $cnpj;
        $_SESSION['estado'] = $estado;
        $_SESSION['telefone'] = $telefone;
        $_SESSION['descricao'] = $descricao;
        
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
