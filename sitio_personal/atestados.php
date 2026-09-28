<?php
include("config/conexion.php");

$atestados = $conn->query("SELECT * FROM atestados");
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atestados Académicos</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <header>
        <nav 
    style="background: #2c3e50; padding: 15px; text-align: center;">
    <a href="index.php" style="color: white; margin: 0 15px; text-decoration: none;">Inicio / Acerca de mí</a>
    <a href="atestados.php" style="color: white; margin: 0 15px; text-decoration: none;">Atestados</a>
    <a href="galeria.php" style="color: white; margin: 0 15px; text-decoration: none;">Galería</a>
    <a href="contacto.php" style="color: white; margin: 0 15px; text-decoration: none;">Contacto</a>
</nav>
    </header>

    <main class="container">
        <h2>Atestados Académicos y Certificaciones</h2>
        <div class="grid-atestados">
            <?php while($row = $atestados->fetch_assoc()): ?>
                <div class="card-atestado" style="background: #f9f9f9; padding: 15px; margin-bottom: 20px; border-radius: 5px; border-left: 4px solid #3498db;">
                    <h3><?php echo $row['nombre_titulo']; ?></h3>
                    <p><strong>Institución:</strong> <?php echo $row['institucion']; ?></p>
                    <p><strong>Año/Fecha:</strong> <?php echo $row['anio']; ?></p>
                    <p><?php echo $row['descripcion']; ?></p>
                    
                    <!-- Mostrar la imagen del atestado si existe -->
                    <?php if(!empty($row['imagen'])): ?>
                        <div style="margin-top: 15px;">
                            <img src="<?php echo $row['imagen']; ?>" alt="Certificado" style="width: 100%; max-width: 400px; height: auto; border-radius: 4px; border: 1px solid #ccc;">
                        </div>
                    <?php endif; ?>
                </div>
            <?php endwhile; ?>
        </div>
    </main>
</body>
</html>