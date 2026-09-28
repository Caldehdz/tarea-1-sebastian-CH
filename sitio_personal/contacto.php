<?php
include("config/conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Sitio Personal</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav style="background: #2c3e50; padding: 15px; text-align: center;">
    <a href="index.php" style="color: white; margin: 0 15px; text-decoration: none;">Inicio / Acerca de mí</a>
    <a href="atestados.php" style="color: white; margin: 0 15px; text-decoration: none;">Atestados</a>
    <a href="galeria.php" style="color: white; margin: 0 15px; text-decoration: none;">Galería</a>
    <a href="contacto.php" style="color: white; margin: 0 15px; text-decoration: none;">Contacto</a>
</nav>
    </header>

    <main class="container" style="max-width: 800px; margin: 30px auto; padding: 20px; font-family: Arial, sans-serif;">
        <section class="contacto-section" style="background: #f9f9f9; padding: 25px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            <h2>Contacto</h2>
            <p style="color: #555; margin-bottom: 20px;">¿Tienes alguna consulta, propuesta o deseas ponerte en contacto conmigo? Utiliza cualquiera de los siguientes medios:</p>
            
            <hr style="margin: 20px 0; border: 0; border-top: 1px solid #ddd;">

            <div class="detalles-contacto" style="line-height: 1.8;">
                <p><strong> Ubicación:</strong> Pérez Zeledón, San José, Costa Rica</p>
                <p><strong> SCH Tech Solutions:</strong> Soporte técnico y servicios de software</p>
                <p><strong> Correo Electrónico:</strong> <a href="mailto:calderonsebastian352@gmail.com" style="color: #2980b9;">calderonsebastian352@gmail.com</a></p>
                <p><strong> Teléfono / WhatsApp:</strong> +506 8940-7132</p>
                <p><strong> LinkedIn:</strong> <a href="https://www.linkedin.com/in/sebastian-calderon-00b8a3268

" target="_blank" style="color: #2980b9;">Ver perfil profesional en LinkedIn</a></p>
            </div>

            <div style="margin-top: 30px; background: #fff; padding: 15px; border-radius: 6px; border-left: 4px solid #3498db;">
                <p style="margin: 0; color: #333;">También puedes encontrarme y revisar mis proyectos activos o enviar una consulta directa mediante los canales habituales de soporte técnico.</p>
            </div>
        </section>
    </main>
</body>
</html>