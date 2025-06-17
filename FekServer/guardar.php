<?php
// Verificamos si se envió el formulario
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Obtener los datos del formulario
    $nombre_practica = $_POST['nombre_practica'] ?? '';
    $nombre_estudiante = $_POST['nombre_estudiante'] ?? '';
    $curso = $_POST['curso'] ?? '';

    // Verificar si se subió un archivo
    if (isset($_FILES['archivo']) && $_FILES['archivo']['error'] === 0) {

        $nombre_archivo = $_FILES['archivo']['name'];
        $ruta_temporal = $_FILES['archivo']['tmp_name'];
        $carpeta_destino = 'uploads/';

        // Crear la carpeta si no existe
        if (!is_dir($carpeta_destino)) {
            mkdir($carpeta_destino, 0777, true);
        }

        $ruta_destino = $carpeta_destino . basename($nombre_archivo);

        // Mover el archivo a la carpeta final
        if (move_uploaded_file($ruta_temporal, $ruta_destino)) {
            echo "✅ Archivo subido correctamente.<br>";
            echo "📄 Nombre de la práctica: $nombre_practica<br>";
            echo "👩‍🎓 Estudiante: $nombre_estudiante<br>";
            echo "📚 Curso: $curso<br>";
            echo "🗂 Archivo guardado en: $ruta_destino";
        } else {
            echo "❌ Error al mover el archivo.";
        }

    } else {
        echo "❌ No se subió ningún archivo o hubo un error al subirlo.";
    }

} else {
    echo "⚠ No se ha enviado el formulario.";
}
?>