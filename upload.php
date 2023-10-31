<?php
$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];

if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png' || $tipo == 'image/gif'){

if(!is_dir('images')){

mkdir('images',0777);

}

move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);

header("Refresh:5; URL=index.php");

echo "<h1>Imagen subida exitosamente</h1>";
}else{
    header("Refresh:5; URL=index.php");
    echo "<h1>sube un archivo que tenga un formato valido...</h1>";
}

var_dump($archivo);
die();

?>