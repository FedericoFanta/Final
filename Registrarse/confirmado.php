<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="confirmado.css">
    <link
      href="https://fonts.googleapis.com/css2?family=Montserrat&family=Poppins:wght@300;700&display=swap"
      rel="stylesheet"
    />
    <title>Registro completo</title>
</head>
<body>

    <nav>
      <ul>
        <li><a href="../Web_Gato/gato.php"> Home</a></li>
        <li><a href="../Market/market.php"> Market</a></li>
        <li><a href="">¿Qué es cosa de gatos?</a></li>
        <li><a href="../Registrarse/form.php"> Registrarse</a></li>
      </ul>
    </nav>

    <h1>
        Se a registrado con exito!!!     
    </h1>
    <br />
    <h3>Redireccionando en 5 segundos...</h3>

    

    <?php
    header( "refresh:5;url=../Web_Gato/gato.php" ); //para redireccionar en 5segundos
    ?>


    
</body>
</html>