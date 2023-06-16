<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="estilo.css">
    <title>Ejercicio Form</title>
</head>
<body>
    <form action="Ejercicio-Form.php" method="get">
    <input name="user" type="text">
    <br>
    <input name="pass" type="text">
    <br>
    <button type="submite">Enviar</button>
    <?php
    $user = $_GET["user"];
    $pass = $_GET["pass"];
    
    echo "<br>Nombre de usario: ". $user .  " <br> Contraseña " .$pass;
    ?>
    </form>
    
   
</body>
</html>