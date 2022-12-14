<!DOCTYPE html>

<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="form.css"> <!-- llamando a mi archivo css -->
        <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;700&display=swap"
      rel="stylesheet"
    />
        <title>Registro</title>
</head>

<body>

    <nav>
        <ul>
          <li><a href="../Web_Gato/index.php"> Home</a></li>
          <li><a href="../Market/market.php"> Market</a></li>
          <li><a href="../QuienesSomos/quienessomos.php">¿Qué es cosa de gatos?</a></li>
          <li><a href="form.php"> Registrarse </a></li>
        </ul>
    </nav>
        <h1>Registro</h1><!-- el titulo central-->

        <form action="registro.php" method="POST" >
                <!-- inicio de etiqueta form-->
                <div class="boton">
                Nombre <br />
                <input type="texto" name="nombre" value="" size="40" maxlength="30" placeholder="Ingrese Nombre" /> <!-- input texto para nombre-->
                <br />
                Apellidos <br />
                <input type="texto" name="apellidos" value="" size="40" maxlength="70" placeholder="Ingrese Apellido" /><!-- input texto apellidos-->
                <br />
                Contraseña <br />
                <input type="password" name="contraseña" size="40" value="" maxlength="10" /><!-- input para contraseña, maxlenght en 10 para que el usuario pueda poner solo 10 caracteres-->
                <br />
                DNI <br />
                <input type="number" name="dni" value="" size="40" min="0" max="999999" maxlength="9" />
                <!-- input texto con maxlength en 9 para que el usuario pueda introducir solo 9 caracteres-->
                <br />
                Sexo: 
                <input type="radio" name="sexo" value="Masculino" checked="checked" /> Masculino
                
                <input type="radio" name="sexo" value="Femenino" /> Femenino
                <!-- input radios valuados en hombre mujer y checked en el de hombre para que aparesca seleccionado-->
                <br /><br />
                Incluir mi foto <input type="file" name="foto" /><!-- input para cargar archivo-->
                <br /><br />
                <input name="suscribir" type="checkbox" value="suscribir" checked="checked" /> Suscribirme al boletín de novedades
                <br /><br />
               
                <input  type="submit" name="enviar" value="Guardar cambios" />
                <input type="reset" name="limpiar" value="Borrar los datos introducidos" />
                </div>
                <!-- checkbox de suscribir// boton de enviar con value "guardar cambios" y boton de resetar formulario value "borrar los datos introducidos"-->
        </form>
        <!--cierre de etiqueta form-->

       
       
</body>

</html>
