<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ASTROS Y MAESTROS</title>
    <!-- Agregar enlaces a Bootstrap CSS -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<body class='fondo'>
    <header class="text-white py-3 headerImg">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1>ASTROS Y MAESTROS</h1>
                </div>
                <div class="col-md-6 text-end">
                    <p>Teléfono: (123) 456-7890</p>
                    <p>Email: info@empresa.com</p>
                </div>
            </div>
        </div>
    </header>
    <div class="container mt-4 contenido">
        <!-- Slide para imagenes -->
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="2.jpg" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- SECCIONES -->
        <!-- seccion 1 -->
        <div class="textoBlanco my-5">
            <section id="acerca-de" class="container mt-4">
                <div class="row colorSeccion textoBlanco">
                    <div class="col-md-6">
                        <h2>Fecha o titulo</h2>
                        <p>un equipo Somos apasionado por compartir información valiosa. Nuestra misión es...</p>
                    </div>
                    <div class="col-md-6">
                        <img src="1.jpg" class="card-img-top" alt="Imagen 2">
                    </div>
                </div>
            </section>
        </div>
        <!-- seccion 2 -->
        <div class="textoBlanco my-5">
            <section id="acerca-de" class="container mt-4">
                <div class="row colorSeccion textoBlanco">
                    <div class="col-md-6">
                        <img src="1.jpg" class="card-img-top" alt="Imagen 2">
                    </div>
                    <div class="col-md-6">
                        <h2>Fecha o titulo</h2>
                        <p>un equipo Somos apasionado por compartir información valiosa. Nuestra misión es...</p>
                    </div>
                </div>
            </section>
        </div>
        <!-- TARJETAS -->
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="1.jpg" class="card-img-top" alt="Imagen 1">
                        <div class="card-body">
                            <h5 class="card-title">Título de la Tarjeta 1</h5>
                            <p class="card-text">Contenido de la tarjeta 1.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="1.jpg" class="card-img-top" alt="Imagen 2">
                        <div class="card-body">
                            <h5 class="card-title">Título de la Tarjeta 2</h5>
                            <p class="card-text">Contenido de la tarjeta 2.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card">
                        <img src="1.jpg" class="card-img-top" alt="Imagen 3">
                        <div class="card-body">
                            <h5 class="card-title">Título de la Tarjeta 3</h5>
                            <p class="card-text">Contenido de la tarjeta 3.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="footerImg text-white text-center py-2">
        <div>
            redes y numeros
        </div>
        <p>Derechos de autor © 2023. Todos los derechos reservados.</p>
    </footer>

    <!-- Agregar enlaces a Bootstrap JS (opcional) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>