<?php
include("conexion.php");

$numero = $_POST['numero'];
$nombre_practica = $_POST['nombre_practica'];
$nombre_estudiante = $_POST['nombre_estudiante'];
$curso = $_POST['curso'];
$fecha_subida = $_POST['fecha_subida'];

$nombre_archivos = $_FILES['archivo']['name'];

// Asegúrate de que exista la carpeta "archivos"
move_uploaded_file($_FILES['archivo']['tmp_name'], "archivos/" . $nombre_archivos);

$sql = "INSERT INTO practicas (numero, nombre_practica, nombre_estudiante, curso, nombre_archivos, fecha_subida)
        VALUES ('$numero', '$nombre_practica', '$nombre_estudiante', '$curso', '$nombre_archivos', '$fecha_subida')";

$resultado = mysqli_query($conexion, $sql);

if ($resultado) {
    echo "✅ Práctica subida correctamente.";
} else {
    echo "❌ Error al guardar: " . mysqli_error($conexion);
}
?>