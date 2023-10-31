# subir-imagenes, un mini proyecto para subir imagenes y mostrarlas
### ![image](https://github.com/Silkaleex/subir-imagenes/assets/82760991/dab25da4-4ee0-47f4-853e-37951587c660)
### ![image](https://github.com/Silkaleex/subir-imagenes/assets/82760991/d1b251b9-edaa-4144-9f22-ca2c913dc093)
## He creado una estructura HTML5 para hacer el formulario de tipo file y tipo submit, tipo file para que me suba la imagen y submit para enviar los datos.
## Después hice un bucle while para cuando esten subidas las imagenes se vayan mostrando una debajo de otra usando un <br/>
### ![image](https://github.com/Silkaleex/subir-imagenes/assets/82760991/725382da-e2f2-4154-989a-1080a3de09f7)
## uso var_dump para ver los datos de la variable $archivo que me muestra todos los datos de la imagen que subamos su formato,tamaño...
## aqui verificamos la imagen de que formato es, si es jpg, npg..., si es correcto uno de los formatos puse el ccodigo mkdir que me crea la carpeta images.
## en este caso, move_uploaded_file me mueve la imagen a la carpeta de images y header me refresca la pagina que me redirecciona en este caso a mi index.php y me 
## pondrá un texto de imagen subida exitosamente.
## si la imagen no tiene el formato correcto nos enviara un mensaje de formato no valido y nos reedirecciona a index.php a los 5segundos con el codigo de headers.
# TO DO
## mejorar el diseño
## usarlo para uno de mis proyectos
