<?php
    if(isset($_POST['bt_enviar'])) {
        $tipos_permitidos = ['jpg', 'jpeg', 'gif', 'png', 'JPG', 'JPEG', 'GIF', 'PNG'];

        $extensao = pathinfo($_FILES['arquivo']['name'], PATHINFO_EXTENSION);

        // ver array de tipos existe a extensao do arquivo
        if(in_array($extensao, $tipos_permitidos)) {
            $pasta = "arquivos/";
            $temporario = $_FILES['arquivo']['tmp_name'];
            $novo_nome = uniqid().".$extensao";

            // fazer o upload do arquivo
            if(move_uploaded_file($temporario, $pasta.$novo_nome)) {
                echo "<p>Upload realizado!</p>";
            } else {
                echo "<p>Falha no Upload!</p>";
            } // fim fazer upload
           
        } else {
            echo "<p>Tipo do arquivo não é permitido!</p>";
        } // fim if array
    }

?> 
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de arquivo</title>
</head>
<body>
    <form action="11-upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo" id="arquivo" />
        <button type="submit" name="bt_enviar">Enviar</button>
    </form>
</body>
</html>