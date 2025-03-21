<?php
include 'estudiantes.php';

$nombre = $_POST['nombre'];
$edad = $_POST['edad'];
$email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Datos del Estudiante</title>
</head>
<body>
    <h1>Datos del Estudiante</h1>
    
    <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
    <p><strong>Edad:</strong> <?php echo $edad; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>

    <form action="index.html" method="post">
        <button type="submit">Regresar</button>
    </form>
</body>
</html>

