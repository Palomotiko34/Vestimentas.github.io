<?php
$host = 'localhost';
$user = 'root';
$password = '123456';
$dbname = 'mi_base_datos';

// Conexión a la base de datos
$conn = new mysqli($host, $user, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Obtener comentarios
$sql = "SELECT nombre, comentario FROM comentarios ORDER BY id DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comentarios</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #F5F5DC;">
            <div class="container">
                <a class="navbar-brand d-flex align-items-center" href="index.php">
                    <img src="imagenes/logocbtis205.png" alt="CBTis 205" style="height: 50px;">
                    <span class="ms-2" style="font-family: 'Comic Sans MS'; font-size: 18px; color: #800000;">CBTis 205 Juchitán</span>
                </a>
            </div>
        </nav>
    </header>

    <section>
        <div class="container">
            <h2 class="text-uppercase text-center">Comentarios</h2>
            <!-- Lista de Comentarios -->
            <div class="list-group mb-4">
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="list-group-item">
                        <strong><?php echo htmlspecialchars($row['nombre']); ?>:</strong>
                        <p><?php echo htmlspecialchars($row['comentario']); ?></p>
                    </div>
                <?php endwhile; ?>
            </div>

            <!-- Formulario -->
            <form method="post" action="guardar_comentario.php">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                </div>
                <div class="mb-3">
                    <label for="comentario" class="form-label">Comentario</label>
                    <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
                </div>
                <button type="submit" class="btn btn-primary"><i class="bi bi-send"></i> Enviar</button>
            </form>
        </div>
    </section>
</body>
</html>