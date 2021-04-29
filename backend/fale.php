<?php
require_once 'conecta.php';

if(isset($_POST['nome']) && isset($_POST['email']) && isset($_POST['mensagem'])){
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql = "INSERT INTO contato (nome, email, mensagem) VALUES ('$nome','$email','$mensagem')";
    $result = $conexao->query($sql);

                if ($result) {
                    echo "
                    <script>
                        alert('Mensagem enviada com sucesso!');
                        location.href='../fale-conosco.php';
                    </script>";
                } else {
                    echo "
                        <script>
                            alert('ERRO!! Mensagem não enviada!')
                            location.href='../fale-conosco.php';
                        </script>";
                    exit();
                }
}
?>