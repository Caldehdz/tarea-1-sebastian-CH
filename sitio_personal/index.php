<?php
require_once __DIR__ . "/config/conexion.php";

// Consultar los datos del perfil principal (id = 1)
$resultado = $conn->query("SELECT * FROM perfil WHERE id = 1");
$perfil = $resultado->fetch_assoc();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio - Sitio Personal</title>
    <link rel="stylesheet" href="assets/css/style.css">
    <style>
        .perfil-container {
            display: flex;
            align-items: flex-start;
            gap: 30px;
            flex-wrap: wrap;
        }
        .foto-perfil {
            flex: 1;
            min-width: 200px;
            text-align: center;
        }
        .foto-perfil img {
            width: 100%;
            max-width: 220px;
            height: 220px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid #3498db;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .info-perfil {
            flex: 2;
            min-width: 300px;
        }
        @media (max-width: 768px) {
            .perfil-container {
                flex-direction: column;
                align-items: center;
            }
        }
    </style>
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

    <main class="container" style="max-width: 900px; margin: 30px auto; padding: 20px; font-family: Arial, sans-serif;">
        <section class="perfil-section" style="background: #f9f9f9; padding: 30px; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
            
            <div class="perfil-container">
                <!-- Foto de Perfil -->
                <div class="foto-perfil">
                    <img src="/sitio_personal/assets/img/perfil.png" alt="Foto de Sebastián Calderón Hernández">
                </div>

                <!-- Información Principal -->
                <div class="info-perfil">
                    <h1><?php echo $perfil['nombre_completo']; ?></h1>
                    <p style="font-size: 1.15em; color: #2980b9; margin-top: 5px;"><strong><?php echo $perfil['descripcion_corta']; ?></strong></p>
                </div>
            </div>
            
            <hr style="margin: 25px 0; border: 0; border-top: 1px solid #ddd;">

            <div class="bio">
                <h3>Acerca de mí</h3>
                <p style="line-height: 1.6; color: #444;"><?php echo $perfil['descripcion_larga']; ?></p>
            </div>

            <div class="detalles" style="margin-top: 25px; line-height: 1.8;">
                <p><strong>Intereses:</strong> <?php echo $perfil['intereses']; ?></p>
                <p><strong>Habilidades técnicas:</strong> <?php echo $perfil['habilidades']; ?></p>
                <p><strong>Experiencia:</strong> <?php echo $perfil['experiencia']; ?></p>
            </div>
        </section>
    </main>
</body>
</html>