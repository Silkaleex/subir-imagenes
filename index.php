<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./main.css">
    <title>Subida de Archivos</title>
</head>
<body>
   <section class="container">
    <div class="contenido">
    <h1>Subiendo archivos en php</h1>
    <form action="upload.php" method="POST" enctype="multipart/form-data" class="formulario">
        <input class="subida" type="file" name="archivo"/>
        <input class="enviar" type="submit" value="Enviar"/>
    </form>
    <?php
    $gestor=opendir('./images');

    if($gestor):
        while(($image=readdir($gestor))!==false):
            if($image != '.' && $image != '..'):
                echo "<br/><img src='images/$image' width='200px' height='200px'/><br/>";
            endif;
        endWhile;
    endif;
    ?>
    </div>
    </section>
</body>
</html>