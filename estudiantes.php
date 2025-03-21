<?php

$hostDB = "localhost";     
$userDB = "root";          
$pwdDB = "";       
$nameDB = "examenbd";

$estDB = new mysqli($hostDB, $userDB, $pwdDB, $nameDB);      

if ($estDB->connect_error) {   
    echo $estDB->connect_error;
    die();
}

echo "Conexión exitosa <br>";

// Mostrar datos
$sqlSelect = "SELECT * FROM estudiantes";  
$resultSelect = $estDB->query($sqlSelect);
if ($resultSelect->num_rows > 0) {
    while ($row = $resultSelect->fetch_assoc()) {
        $nombre = $row['nombre'];
        $edad = $row['edad'];
        $email = $row['email'];
        echo "$edad $nombre $email <br>";
    }
} else {
    echo "<br>No hay registros";
}

$estDB->close();
?>
