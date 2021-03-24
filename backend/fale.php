<?php
require_once 'conecta.php';

if(isset($_POST['email']) && isset($_POST['telefone']) && isset($_POST['mensagem'])){
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (email, telefone, mensagem) VALUES ('$email','$telefone','$mensagem')";
    $result = $conexao->query($sql);

                if ($result) {
                    echo "<script>alert('Mensagem enviada com sucesso!');location.href='../index.php'</script>";
                } else {
                    echo "<script>alert('ERRO!! Mensagem não enviada!')</script>";
                    exit();
                }
}
?>