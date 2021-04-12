<?php
session_start();
if(!$_SESSION['email']){
    echo "<script>
            alert('Para esta função, por favor faça o login.');
            location.href='login.php'
        </script>";
    exit();
}