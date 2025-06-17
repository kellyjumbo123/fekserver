<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Práctica</title>
</head>
<body>
    <h2>Subir práctica</h2>
    <form action="guardar.php" method="post" enctype="multipart/form-data">
        <label>Número:</label><br>
        <input type="text" name="numero" required><br><br>

        <label>Nombre de la práctica:</label><br>
        <input type="text" name="nombre_practica" required><br><br>

        <label>Nombre del estudiante:</label><br>
        <input type="text" name="nombre_estudiante" required><br><br>

        <label>Curso:</label><br>
        <input type="text" name="curso" required><br><br>

        <label>Archivo:</label><br>
        <input type="file" name="archivo" required><br><br>

        <input type="submit" value="Subir práctica">
    </form>
</body>
</html>