<<<<<<< HEAD

=======
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
<?php
$foto = $_FILES['foto'];
if ($foto['error']==4){
    echo "<script>
            alert('Por favor envie uma foto.');
            history.back();
            </script>";
} else if (!preg_match("/(.)+(jpg|JPG|jpeg|JPEG|png|PNG|svg|SVG|BMP|bmp)/",$foto['name'])){   
    echo "<script>
            alert('Por favor envie uma IMAGEM!');
            history.back();
            </script>";
} else {
    $largura = 20000;
    $altura = 10000;
    $tamanho = 2000000;
    
    $dimensoes = getimagesize($foto['tmp_name']);
    
    if ($dimensoes[0]>$largura || $dimensoes[1]>$altura){
        echo "Envie uma imagem menor";
    } else {
        $extensao = explode(".",$foto["name"]);
        $nomefoto= md5(uniqid(time())).".".$extensao[1];
        $destino = "fotos/".$nomefoto;
        $upar = move_uploaded_file($foto["tmp_name"],$destino);
    }
}
?>
<<<<<<< HEAD

=======
>>>>>>> 807bb04b57e7b18bc63446fb405e8f368d10a9df
