<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Otros Apartados</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive">
                    <i class="bi bi-list"></i> Menú
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item"><a class="nav-link text-dark" href="index.php">Inicio</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="acerca-de.php">Acerca de</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="comentarios.php">Comentarios</a></li>
                        <li class="nav-item"><a class="nav-link text-dark" href="otros-apartados.php">Otros Apartados</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main class="container mt-4">
        <h1 class="text-center text-uppercase" style="color: #800000;">Otros Apartados</h1>
        <div class="accordion mt-4" id="otrosApartadosAccordion">
            <!-- Áreas de Enfoque -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingEnfoque">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEnfoque" aria-expanded="true">
                        Áreas de Enfoque
                    </button>
                </h2>
                <div id="collapseEnfoque" class="accordion-collapse collapse show" data-bs-parent="#otrosApartadosAccordion">
                    <div class="accordion-body">
                        <p>Vestimentas, arte, cultura e historia zapoteca.</p>
                    </div>
                </div>
            </div>
            <!-- CBTis 205 -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingCBTis">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseCBTis">
                        CBTis 205
                    </button>
                </h2>
                <div id="collapseCBTis" class="accordion-collapse collapse" data-bs-parent="#otrosApartadosAccordion">
                    <div class="accordion-body">
                        <p>El Centro de Bachillerato Tecnológico Industrial y de Servicios No. 205 se localiza en Juchitán, Oaxaca, y es reconocido por formar profesionales con excelencia técnica y valores éticos.</p>
                    </div>
                </div>
            </div>
            <!-- Juchitán -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingJuchitan">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseJuchitan">
                        Juchitán
                    </button>
                </h2>
                <div id="collapseJuchitan" class="accordion-collapse collapse" data-bs-parent="#otrosApartadosAccordion">
                    <div class="accordion-body">
                        <p>Juchitán de Zaragoza es un municipio en Oaxaca, famoso por su rica tradición zapoteca, gastronomía y textiles únicos.</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="py-3 mt-5" style="background-color: #800000;">
        <p class="text-center text-white">© Derechos Reservados 2024</p>
        <div class="text-center">
            <a href="https://www.facebook.com/CBTis205JuchitanOaxaca" class="btn btn-light btn-sm" target="_blank">
                <i class="bi bi-facebook"></i> Facebook
            </a>
        </div>
        <p class="text-center text-white mt-2">Centro de Bachillerato Tecnológico Industrial y de Servicios No. 205</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>