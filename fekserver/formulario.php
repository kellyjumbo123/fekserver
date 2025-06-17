<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FEK Server - Mecatrónica</title>
    <style>

        :root {
            --tech-primary:#1b8fc5;    
            --tech-secondary:#0a59a3;  
            --tech-accent: #64ffda;     
            --tech-text: #ccd6f6;     
            --tech-highlight: #1e90ff; 
            --tech-card: #114fb9;      
            --tech-form: #0c1a32;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            background-color: var(--tech-primary);
            color: var(--tech-text);
            line-height: 1.6;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ===== BARRA DE NAVEGACIÓN TECNO ===== */
        .navbar {
            background-color:#1b8fc5(10, 25, 47, 0.9);
            backdrop-filter: blur(10px);
            padding: 20px 0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }

        .navbar-brand {
            display: flex;
            align-items: center;
            gap: 15px;
            font-size: 24px;
            font-weight: bold;
            margin-left: 30px;
            color: var(--tech-accent);
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .logo {
            height: 40px;
            width: auto;
            filter: drop-shadow(0 0 5px rgba(100, 255, 218, 0.5));
        }

        .navbar-menu {
            display: flex;
            list-style: none;
            margin-right: 30px;
        }

        .navbar-menu li {
            margin-left: 30px;
        }

        .navbar-menu li a {
            color: var(--tech-text);
            text-decoration: none;
            font-weight: 500;
            font-size: 16px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-menu li a:hover {
            color: var(--tech-accent);
        }

        .navbar-menu li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 2px;
            bottom: -5px;
            left: 0;
            background-color: var(--tech-accent);
            transition: width 0.3s ease;
        }

        .navbar-menu li a:hover::after {
            width: 100%;
        }

        /* ===== HERO SECTION TECNO ===== */
        .hero {
            height: 100vh;
            display: flex;
            align-items: center;
            padding-top: 80px;
            position: relative;
            overflow: hidden;
            background-image: url('https://images.unsplash.com/photo-1451187580459-43490279c0fa?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2072&q=80');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(to right, rgba(10, 25, 47, 0.9), rgba(10, 25, 47, 0.7));
            z-index: 0;
        }

        .hero-content {
            max-width: 800px;
            position: relative;
            z-index: 1;
        }

        .hero h1 {
            font-size: 2.8rem;
            margin-bottom: 20px;
            color: var(--tech-text);
            text-shadow: 0 2px 10px rgba(0, 0, 0, 0.3);
        }

        .hero h1 span {
            color: var(--tech-accent);
        }

        .hero p {
            font-size: 1.2rem;
            margin-bottom: 30px;
            line-height: 1.8;
            opacity: 0.9;
            text-shadow: 0 1px 5px rgba(0, 0, 0, 0.2);
        }

        .hero-btn {
            display: inline-block;
            padding: 12px 28px;
            background-color: transparent;
            color: var(--tech-accent);
            border: 1px solid var(--tech-accent);
            border-radius: 4px;
            font-size: 16px;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .hero-btn:hover {
            background-color: rgba(100, 255, 218, 0.1);
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(100, 255, 218, 0.2);
        }

        /* ===== SECCIÓN CAFÉ TECNO ===== */
        .section {
            padding: 100px 0;
        }

        .section-title {
            font-size: 2.2rem;
            margin-bottom: 50px;
            color: var(--tech-text);
            position: relative;
            display: inline-block;
        }

        .section-title::after {
            content: '';
            position: absolute;
            width: 100%;
            height: 2px;
            bottom: -10px;
            left: 0;
            background-color: var(--tech-accent);
        }

        .coffee-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 25px;
        }

        .coffee-card {
            background-color: var(--tech-card);
            border-radius: 8px;
            padding: 30px;
            transition: all 0.3s ease;
            border: 1px solid rgba(100, 255, 218, 0.1);
        }

        .coffee-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
            border-color: var(--tech-accent);
        }

        .coffee-card h3 {
            color: var(--tech-accent);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }

        /* ===== SECCIÓN INFRAESTRUCTURA ===== */
        .infra-section {
            background-color: var(--tech-secondary);
            padding: 80px 0;
        }

        .infra-container {
            max-width: 800px;
            margin: 0 auto;
        }

        .infra-section h2 {
            font-size: 2.2rem;
            margin-bottom: 30px;
            color: var(--tech-text);
        }

        .infra-section h3 {
            font-size: 1.8rem;
            margin: 30px 0 20px;
            color: var(--tech-accent);
        }

        .infra-section p {
            margin-bottom: 20px;
            line-height: 1.7;
        }

        .highlight-box {
            background-color: rgba(100, 255, 218, 0.05);
            border-left: 3px solid var(--tech-accent);
            padding: 15px 20px;
            margin: 25px 0;
        }

        /* ===== SECCIÓN MECATRÓNICA TECNO ===== */
        .mechatronics-section {
            background-color: var(--tech-secondary);
            padding: 80px 0;
            position: relative;
        }

        .mechatronics-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"><path fill="rgba(100,255,218,0.03)" d="M0,0 L100,0 L100,100 L0,100 Z" /></svg>');
            background-size: cover;
            z-index: 0;
        }

        .upload-form {
            max-width: 700px;
            margin: 0 auto;
            background-color: var(--tech-form);
            padding: 40px;
            border-radius: 8px;
            border: 1px solid rgba(100, 255, 218, 0.2);
            position: relative;
            z-index: 1;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: var(--tech-accent);
            font-weight: 500;
        }

        .form-group input,
        .form-group textarea,
        .form-group select {
            width: 100%;
            padding: 12px 15px;
            background-color: rgba(10, 25, 47, 0.5);
            border: 1px solid rgba(100, 255, 218, 0.2);
            border-radius: 4px;
            color: var(--tech-text);
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .form-group input:focus,
        .form-group textarea:focus,
        .form-group select:focus {
            outline: none;
            border-color: var(--tech-accent);
            box-shadow: 0 0 0 2px rgba(100, 255, 218, 0.2);
        }

        .form-group textarea {
            min-height: 150px;
            resize: vertical;
        }

        .submit-btn {
            background-color: var(--tech-accent);
            color: var(--tech-primary);
            border: none;
            padding: 14px 30px;
            border-radius: 4px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .submit-btn:hover {
            background-color: transparent;
            color: var(--tech-accent);
            box-shadow: 0 0 0 1px var(--tech-accent);
        }

        /* ===== BENEFICIOS TECNO ===== */
        .benefits-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 30px;
        }

        .benefit-card {
            background-color: var(--tech-card);
            padding: 30px;
            border-radius: 8px;
            border: 1px solid rgba(100, 255, 218, 0.1);
            transition: all 0.3s ease;
        }

        .benefit-card:hover {
            transform: translateY(-5px);
            border-color: var(--tech-highlight);
        }

        .benefit-icon {
            font-size: 2.5rem;
            color: var(--tech-highlight);
            margin-bottom: 20px;
        }

        .benefit-card h3 {
            color: var(--tech-text);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .benefit-card p {
            opacity: 0.8;
            line-height: 1.7;
        }

        /* ===== FOOTER TECNO ===== */
        .footer {
            background-color: var(--tech-secondary);
            padding: 60px 0 30px;
            text-align: center;
            border-top: 1px solid rgba(100, 255, 218, 0.1);
        }

        .footer-links {
            display: flex;
            justify-content: center;
            gap: 30px;
            margin-bottom: 30px;
        }

        .footer-links a {
            color: var(--tech-text);
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .footer-links a:hover {
            color: var(--tech-accent);
        }

        .copyright {
            margin-top: 30px;
            color: var(--tech-text);
            opacity: 0.6;
            font-size: 14px;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                padding: 15px;
            }

            .navbar-brand {
                margin: 0 0 15px 0;
            }

            .navbar-menu {
                margin-right: 0;
            }

            .navbar-menu li {
                margin-left: 15px;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .hero p {
                font-size: 1rem;
            }

            .section {
                padding: 60px 0;
            }

            .section-title {
                font-size: 1.8rem;
            }

            .upload-form {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Barra de navegación tecno -->
    <nav class="navbar">
        <div class="navbar-brand">
            <img src="https://cdn-icons-png.flaticon.com/512/2933/2933245.png" alt="Logo" class="logo">
            FEK Server
        </div>
        <ul class="navbar-menu">
            <li><a href="#hero">Inicio</a></li>
            <li><a href="#cafe">Integrantes</a></li>
            <li><a href="#infraestructura">Infraestructura</a></li>
            <li><a href="#mechatronics">Prácticas</a></li>
            <li><a href="#contact">Soporte</a></li>
        </ul>
    </nav>

    <!-- Hero section -->
    <section id="hero" class="hero">
        <div class="container">
            <div class="hero-content">
                <h1>“COLEGIO BACHILLERATO RICAURTE” <span></h1>
                <p>Tercero Mecatrónica "C"</p>
                <h1>BIENVENIDOS A  <span>FEK SERVER</span></h1>
                <p>"Creando mentes y contruyendo futuros"</p>
                <a href="#mechatronics" class="hero-btn">Subir práctica</a>
            </div>
        </div>
    </section>

    <!-- Sección Café -->
    <section id="cafe" class="section">
        <div class="container">
            <h2 class="section-title">Asignación de responsabilidades </h2>
            <div class="coffee-grid">
                <div class="coffee-card">
                    <h3>Erika Esmeralda Sauce Cuenca </h3>
                    <p>Jefa del grupo, encagada de desarrollar el servidor web, subir la base de datos y programar la página web.</p>
                </div>
                
                <div class="coffee-card">
                    <h3>Maria Fernada Mejía Piña</h3>
                    <p> Encarga de conseguir información para la página web, también conseguir el equipo y los materiales necesarios para el proyecto.</p>
                </div>
                
                <div class="coffee-card">
                    <h3>Kelly Paulina Jumbo Cedillo</h3>
                    <p>Encarga de conseguir información para la página web, también conseguir el equipo y los materiales necesarios para el proyecto.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- Sección Infraestructura -->
    <section id="infraestructura" class="infra-section">
        <div class="container infra-container">
            <h2 class="section-title">INFRAESTRUCTURA</h2>
            
            <h3>Arquitectura del servidor</h3>
            <p>El proyecto utiliza XAMPP como entorno local, con Apache como servidor web y MySQL para la base de datos. La arquitectura cliente-servidor permite que el navegador envíe datos mediante formularios, que son procesados por PHP en el servidor y almacenados en MySQL..</p>
            
            <div class="highlight-box">
                <p>Estas solicitudes son procesadas en el servidor por scripts en PHP, que interactúan con la base de datos para guardar o recuperar datos. Este modelo garantiza una comunicación eficiente y segura entre el usuario y el sistema..</p>
            </div>
            
            <h3>Desarrollo</h3>
            <p>El proyecto se desarrolló utilizando XAMPP como entorno local, que integra Apache para el servidor web y MySQL para la base de datos. Se diseñó una página web con un formulario en HTML y se programó en PHP para procesar los datos ingresados por los usuarios. Los datos capturados desde el formulario se envían al servidor, donde PHP los guarda en la base de datos MySQL mediante consultas SQL. Se realizaron pruebas locales para asegurar el correcto funcionamiento del sistema..</p>
        </div>
    </section>

    <!-- Sección Mecatrónica -->
<section id="mechatronics" class="mechatronics-section">
    <div class="container">
        <h2 class="section-title">PRÁCTICAS DE MECATRÓNICA</h2>
        
       <form class="upload-form" action="guardar.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="practice-number">numero:</label>
        <input type="text" id="practice-number" name="numero" required>
    </div>

    <div class="form-group">
        <label for="practice-name">Nombre de la práctica:</label>
        <input type="text" id="practice-name" name="nombre_practica" required>
    </div>

    <div class="form-group">
        <label for="student-name">Nombre del estudiante:</label>
        <input type="text" id="student-name" name="nombre_estudiante" required>
    </div>

    <div class="form-group">
        <label for="course">Curso:</label>
        <input type="text" id="course" name="curso" required>
    </div>

    <div class="form-group">
        <label for="fecha">Fecha:</label>
        <input type="text" id="fecha" name="fecha_subida" required>
    </div>

    <div class="form-group">
        <label for="file">Subir archivo (PDF, DOC):</label>
        <input type="file" id="file" name="archivo" accept=".pdf,.doc,.docx" required>
    </div>

    <button type="submit" class="submit-btn">Enviar práctica</button>
</form>

    </div>
</section>
    </section>

    <!-- Sección Beneficios -->
    <section id="benefits" class="section">
        <div class="container">
            <h2 class="section-title">NUESTROS BENEFICIOS</h2>
            <div class="benefits-grid">
                <div class="benefit-card">
                    <div class="benefit-icon">🚀</div>
                    <h3>Envío rápido y seguro</h3>
                    <p>Utilizamos tecnología de punta para garantizar entregas rápidas y seguras en todo el mundo.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">🔧</div>
                    <h3>Tecnología garantizada</h3>
                    <p>Nuestros productos incorporan lo último en innovación mecatrónica con garantía extendida.</p>
                </div>
                
                <div class="benefit-card">
                    <div class="benefit-icon">📞</div>
                    <h3>Soporte 24/7</h3>
                    <p>Nuestro equipo de soporte técnico está disponible siempre que lo necesites.</p>
                </div>
                <button type="submit" class="submit-btn">ENCENDIDO</button>
                <button type="submit" class="submit-btn">APAGADO</button>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" class="footer">       
        <div class="container">
            <div class="footer-links">
                <a href="#">Términos</a>
                <a href="#">Contacto</a>
                <a href="#">Soporte</a>
                <div class="row">

            </div>
            <p class="copyright">© 2025 FEK Server. Todos los derechos reservados.<br>
            Teléfono: +593 959049888 | Email: fekserver@gmail.com</p>
        </div>
    </footer>
</body