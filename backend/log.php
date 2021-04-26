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
  $query = "SELECT * FROM usuario WHERE email='{$email}' AND senha=sha1('{$senha}')";
  $resultado = mysqli_query($conexao, $query);
  $linha = mysqli_num_rows($resultado);
  
  if($linha == 1){
    while ($row = mysqli_fetch_assoc($resultado)) {
      $_SESSION['id_usuario'] = $row['id_usuario'];
      $_SESSION['nome'] = $row['nome'];
      $_SESSION['senha'] = $row['senha'];
      $_SESSION['email'] = $row['email'];
      $_SESSION['cpf'] = $row['cpf'];
      $_SESSION['telefone'] = $row['telefone'];
      $_SESSION['sexo'] = $row['sexo'];
  }
    header('Location: ../perfil.php');
  } else {
    $_SESSION['naologado'] = true;
    echo"<script>
            alert('Login inválido!'); 
            location.href='../login.php';
          </script>";    
    exit();
  }
