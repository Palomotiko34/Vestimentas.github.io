<?php
// Obtener el parámetro 'vestimenta' desde la URL
$vestimenta = $_GET['vestimenta'] ?? '';

// Variables de descripción e imagen por defecto
$descripcion = "";
$imagen = "imagenes/default.jpg"; // Imagen por defecto

// Descripción y ruta de la imagen según la vestimenta seleccionada
switch ($vestimenta) {
    case 'olan':
        $descripcion = "El Olan es una vestimenta tradicional de Juchitán, característica por su estilo único y colorido. Es usada principalmente en festividades y celebraciones importantes.";
        $imagen = "imagenes/olan.jpg";
        break;
    case 'rabona':
        $descripcion = "La Rabona es una prenda tradicional que forma parte de la vestimenta femenina, conocida por sus detalles bordados a mano y su uso en rituales y festividades.";
        $imagen = "imagenes/rabona.jpg";
        break;
    case 'hupil':
        $descripcion = "El Huipil es una prenda femenina que se caracteriza por su tela tejida a mano y sus bordados, representando un símbolo de la cultura zapoteca.";
        $imagen = "imagenes/hupil.jpg";
        break;
    case 'trajecadenilla':
        $descripcion = "El Traje Cadenilla es un conjunto de prendas de gran importancia en las ceremonias tradicionales, destacando por su tejido y los detalles dorados en la tela.";
        $imagen = "imagenes/trajecadenilla.jpg";
        break;
    case 'trajegala':
        $descripcion = "El Traje de Gala es un atuendo elaborado con telas finas y bordados, usado en eventos formales y festividades especiales.";
        $imagen = "imagenes/trajegala.jpg";
        break;
    case 'trajeregional':
        $descripcion = "El Traje Regional es una prenda tradicional de los pueblos zapotecas, utilizada en celebraciones, y conocida por sus bordados característicos.";
        $imagen = "imagenes/trajeregional.jpg";
        break;
    case 'guayabera':
        $descripcion = "La Guayabera es una camisa masculina de lino o algodón, de estilo relajado y suelta, que se usa en diversas festividades y reuniones.";
        $imagen = "imagenes/guayabera.jpg";
        break;
    case 'filipina':
        $descripcion = "La Filipina es una camisa tradicional de los pueblos indígenas, que se caracteriza por su cuello alto y manga corta.";
        $imagen = "imagenes/filipina.jpg";
        break;
    case 'huarachespiel':
        $descripcion = "Los Huaraches de Piel son un tipo de calzado tradicional, elaborado a mano, que tiene una gran resistencia y confort.";
        $imagen = "imagenes/huarachespiel.jpg";
        break;
    case 'tocado':
        $descripcion = "El Tocado es un accesorio utilizado en eventos formales, compuesto de flores y otros elementos naturales que complementan la vestimenta tradicional.";
        $imagen = "imagenes/tocado.jpg";
        break;
    default:
        $descripcion = "Selecciona una vestimenta para ver más detalles.";
        $imagen = "imagenes/default.jpg";
        break;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vestimentas de Juchitán</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <header>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="acerca-de.php">Acerca de</a></li>
                <li><a href="comentarios.php">Comentarios</a></li>
                <li><a href="otros-apartados.php">Otros Apartados</a></li>
            </ul>
        </nav>
    </header>

    <section id="vestimenta">
        <h1><?php echo ucfirst($vestimenta); ?></h1>
        <img src="<?php echo $imagen; ?>" alt="<?php echo ucfirst($vestimenta); ?>" width="300">
        <p><?php echo $descripcion; ?></p>
    </section>

    <footer>
        <p>&copy; Derechos reservados 2024</p>
    </footer>

</body>
</html>
