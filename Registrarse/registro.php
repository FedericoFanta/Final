<?php
/*


////////// CON PHPMYADMIN //////////


$conex = mysqli_connect("localhost", "root", "", "formulario");  //para conectar 


if ($conex) {
    echo "La base de datos esta conectada"; //validando el correcto funcionamiento de la conexion
} else {
    echo "incorrecto";
}


if (isset($_POST['enviar'])) { //si se hizo click en enviar entonces:
    $nombre = $_POST["nombre"]; //igualando mis variables php a los datos ingresados en el campo nombre
    $apellido = $_POST["apellidos"];
    $contraseña = $_POST["contraseña"];
    $sexo = $_POST["sexo"];
    $DNI = $_POST["dni"];
    //$ID=rand(x,y) me genera ids aleatorios

    $insertarDatos = "INSERT INTO datos(`nombre`, `apellido`, `contraseña`, `DNI`, `sexo`) VALUES('$nombre','$apellido','$contraseña','$DNI','$sexo')"; //para insertar datos a la base de datos SIEMPRE en orden del formulario agregar id para generar aleatorio

    $ejecutarInsertar = mysqli_query($conex, $insertarDatos); //para ejecutar la base de datos con esos datos ingresados

}
*/
    ////////// CON TXT //////////

if (isset($_POST['enviar'])) { 
    //si se hizo click en enviar entonces:
    $nombre = $_POST["nombre"]; //igualando mis variables php a los datos ingresados en el campo nombre
    $apellido = $_POST["apellidos"];
    $contraseña = $_POST["contraseña"];
    $sexo = $_POST["sexo"];
    $DNI = $_POST["dni"];
    //$ID=rand(x,y) me genera ids aleatorios

    $contenido = "
    Nombre: $nombre
    Apellido: $apellido
    Contraseña: $contraseña
    Sexo: $sexo
    Dni: $DNI
    ";

    $archivo = fopen("datos/$apellido.txt","w");// que me cree el archivo en la carpeta datos con el nombre de variable que aplique

    fwrite($archivo,$contenido); //escribe el archivo en un txt

    fclose($archivo); //cierra el archivo

    header("Location: confirmado.php");
}




?>