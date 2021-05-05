<?php
session_start();
require_once('conecta.php');
$id_clinica = $_SESSION["id_clinica"];

$query = "DELETE FROM clinica WHERE id_clinica = $id_clinica";
$apagar = mysqli_query($conexao, $query);
if ($apagar) {
	session_destroy();
    echo "<script>
					alert('Cadastro excluido com Sucesso!');
					location.href='../index.php';
				 </script>";
} else {
    echo "<script>
					alert('Erro! Cadastro não excluído!!');
					location.href='../perfil.php';
				 </script>";
}