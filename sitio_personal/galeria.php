<?php
require_once __DIR__ . "/config/conexion.php";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galería - Sitio Personal</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .galeria-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        .galeria-card {
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            transition: transform 0.2s;
        }
        .galeria-card:hover {
            transform: translateY(-5px);
        }
        .galeria-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .galeria-info {
            padding: 15px;
        }
        .galeria-info h4 {
            margin: 0 0 5px 0;
            color: #2c3e50;
        }
        .galeria-info p {
            margin: 0;
            color: #666;
            font-size: 0.9em;
        }
    </style>
</head>
<body>
    <header>
        <nav style="background: #2c3e50; padding: 15px; text-align: center;">
            <a href="index.php" style="color: white; margin: 0 15px; text-decoration: none;">Inicio / Acerca de mí</a>
            <a href="atestados.php" style="color: white; margin: 0 15px; text-decoration: none;">Atestados</a>
            <a href="galeria.php" style="color: white; margin: 0 15px; text-decoration: none; font-weight: bold;">Galería</a>
            <a href="contacto.php" style="color: white; margin: 0 15px; text-decoration: none;">Contacto</a>
        </nav>
    </header>

    <main class="container" style="max-width: 900px; margin: 30px auto; padding: 20px; font-family: Arial, sans-serif;">
        <section style="background: #f9f9f9; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h2>Galería</h2>
            <p style="color: #555; margin-bottom: 20px;">Registro visual de proyectos tecnológicos, certificaciones académicas y momentos profesionales.</p>
            
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ddd;">

            <div class="galeria-grid">
                <!-- Elemento 1: Perfil / Personal -->
                <div class="galeria-card">
                    <img src="assets/img/perfil.png" alt="Fotografía de Perfil">
                    <div class="galeria-info">
                        <h4>Perfil Profesional</h4>
                        <p>Sebastián Calderón Hernández - Fundador de SCH Tech Solutions.</p>
                    </div>
                </div>

                <!-- Elemento 2: Proyecto / Soporte Técnico -->
                <div class="galeria-card">
                    <img src="assets/img/atestados/cisco_analisis_datos.png" alt="Certificación Académica">
                    <div class="galeria-info">
                        <h4>Área Académica y Análisis de Datos</h4>
                        <p>Formación especializada en Cisco y tecnologías de información.</p>
                    </div>
                </div>

                <!-- Elemento 3: Desarrollo Web -->
                <div class="galeria-card">
                    <img src="assets/img/atestados/ina_operador_tic.png" alt="Formación INA">
                    <div class="galeria-info">
                        <h4>Certificación INA</h4>
                        <p>Operador de Tecnologías de Información y Comunicación.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>
</html>