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
    $_SESSION['cep'] = $row['cep'];
    $_SESSION['rua'] = $row['rua'];
    $_SESSION['numero'] = $row['numero'];
    $_SESSION['complemento'] = $row['complemento'];
    $_SESSION['bairro'] = $row['bairro'];
    $_SESSION['cidade'] = $row['cidade']; 
    $_SESSION['estado'] = $row['estado'];
    header('Location: ../perfil.php');
  } else if($linha == 0){
    $query = "SELECT * FROM clinica WHERE email='{$email}' AND senha='{$senha}'";
    $resultado = mysqli_query($conexao, $query);
    $linha = mysqli_num_rows($resultado);
    if($linha == 1){
      $row = mysqli_fetch_assoc($resultado); 
      $_SESSION['id_clinica'] = $row['id_clinica'];
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['senha'] = $row['senha'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['cnpj'] = $row['cnpj'];
      $_SESSION['estado'] = $row['estado'];
      $_SESSION['telefone'] = $row['telefone'];
      $_SESSION['descricao'] = $row['descricao'];
      $_SESSION['cep'] = $row['cep'];
      $_SESSION['rua'] = $row['rua'];
      $_SESSION['numero'] = $row['numero'];
      $_SESSION['complemento'] = $row['complemento'];
      $_SESSION['bairro'] = $row['bairro'];
      $_SESSION['cidade'] = $row['cidade']; 
      $_SESSION['estado'] = $row['estado'];
      header('Location: ../perfil-clinica.php');
    } else {
      $_SESSION['naologado'] = true;
        echo"<script>
                alert('Login inválido!'); 
                location.href='../login.php';
              </script>";    
        exit();
    }
  }

