<?php
$conexion = mysqli_connect("localhost", "root", "", "fekserver_nueva");

if (!$conexion) {
    die("❌ Error de conexión: " . mysqli_connect_error());
} else {
    echo "✅ Conexión exitosa a la base de datos.";
}
?>
