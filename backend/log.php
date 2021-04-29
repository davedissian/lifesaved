<?php
  session_start();
  require_once('conecta.php');

  if(empty($_POST['email']) || empty($_POST['senha'])){
    echo "<script>
            alert ('Preencha todos os campos!!');
            location.href = '../login.php';
          </script>
        ";
    exit();
  }

  $email = mysqli_real_escape_string($conexao, $_POST['email']);
  $senha = mysqli_real_escape_string($conexao, $_POST['senha']);
  $senha = sha1($senha);
  $query = "SELECT * FROM usuario WHERE email='{$email}' AND senha='{$senha}'";
  $resultado = mysqli_query($conexao, $query);
  $linha = mysqli_num_rows($resultado);
  if($linha == 1){
    $row = mysqli_fetch_assoc($resultado); 
    $_SESSION['id_usuario'] = $row['id_usuario'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['senha'] = $row['senha'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['cpf'] = $row['cpf'];
    $_SESSION['telefone'] = $row['telefone'];
    $_SESSION['sexo'] = $row['sexo'];
    header('Location: ../perfil.php');
  } else if($linha == 0){
    $query = "SELECT * FROM clinica WHERE email='{$email}' AND senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $linha = mysqli_num_rows($resultado);
    if($linha == 1){
      header('Location: ../clinicas.php');
    } else {
      $_SESSION['naologado'] = true;
        echo"<script>
                alert('Login inválido!'); 
                location.href='../login.php';
              </script>";    
        exit();
    }
  }

