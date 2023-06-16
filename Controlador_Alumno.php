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
    <form action="Controlador_Alumno.php" method="get">
    <h2>Ingresar Alumno</h2>
    <input name="nombre" type="text">
    <br>
    <input name="apellido" type="text">
    <br>
    <input name="email" type="text">
    <br>
    <input name="direccion" type="text">
    <br>
    <button type="submite">Enviar</button>
    <?php
    include("../Repositorio_Alumno/Repositorio_Alumnos.php");
    include("../Negocio/Alumno.php");

    $Alumnos = array(IngresarAlumno(new Alumno($_GET["nombre"],$_GET["apellido"],$_GET["email"],$_GET["direccion"])));

    for ($i = 0;$i < count($Alumnos); $i++) {
        echo $Alumnos[$i]->getNombre();
        echo '<br></br>';
        
    }
    ?>
    </form>
    
</body>
</html>