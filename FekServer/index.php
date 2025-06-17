<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEK Server - Subida de Prácticas</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
            color: #fff;
        }

        header {
            background-color: #111;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 10px rgba(0,0,0,0.5);
        }

        header h1 {
            margin: 0;
            font-size: 2em;
            color: #0ff;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 30px;
            background-color: #1e2a38;
            border-radius: 20px;
            box-shadow: 0 0 20px rgba(0, 255, 255, 0.3);
        }

        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #00ffff;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            font-weight: bold;
            margin-bottom: 5px;
        }

        input[type="text"],
        input[type="file"] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 8px;
            font-size: 1em;
            outline: none;
            background-color: #e0f7fa;
            color: #000;
        }

        .submit-btn {
            width: 100%;
            padding: 12px;
            background-color: #00bcd4;
            border: none;
            border-radius: 10px;
            font-size: 1.1em;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .submit-btn:hover {
            background-color: #0097a7;
        }

        footer {
            text-align: center;
            padding: 15px;
            background-color: #111;
            color: #aaa;
            margin-top: 40px;
        }
    </style>
</head>
<body>

    <header>
        <h1>FEK Server</h1>
    </header>

    <div class="container">
        <h2>Prácticas de Mecatrónica</h2>
        <form action="guardar.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nombre_practica">Nombre de la práctica:</label>
                <input type="text" id="nombre_practica" name="nombre_practica" required>
            </div>
            <div class="form-group">
                <label for="nombre_estudiante">Nombre del estudiante:</label>
                <input type="text" id="nombre_estudiante" name="nombre_estudiante" required>
            </div>
            <div class="form-group">
                <label for="curso">Curso:</label>
                <input type="text" id="curso" name="curso" required>
            </div>

              <div class="form-group">
                <label for="curso">Fecha:</label>
                <input type="text" id="curso" name="curso" required>
            </div>

            <div class="form-group">
                <label for="archivo">Subir archivo (PDF, DOC):</label>
                <input type="file" id="archivo" name="archivo" accept=".pdf,.doc,.docx" required>
            </div>
            <button type="submit" class="submit-btn">Enviar práctica</button>
        </form>
    </div>

    <footer>
        &copy; 2025 FEK Server | Proyecto de Grado Mecatrónica
    </footer>

</body>
</html>