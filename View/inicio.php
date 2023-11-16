<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Inicio</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            background-color: #f4f4f4; /* Agrega un fondo de color suave */
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff; /* Fondo blanco para el contenido */
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); /* Sombra suave */
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center; /* Centra verticalmente */
        }

        .column {
            flex: 1;
            max-width: 700px; /* Ancho máximo de la columna */
            margin: 10px;
            text-align: center; /* Centra horizontalmente */
        }

 
        h1 {
            font-size: 28px; /* Tamaño de fuente más grande */
            margin-bottom: 20px; /* Espacio inferior para separar del contenido */
            font-weight: bold; /* Hace que el texto sea más grueso */
            color: blue; /* Cambia el color del texto a azul */
        }

        p {
            font-size: 18px; /* Tamaño de fuente del párrafo */
            margin-bottom: 10px; /* Espacio inferior entre párrafos */
        }

        img {
            max-width: 100%;
            height: auto;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LA BIBLIOTECA</h1>

        <p>Acá en la biblioteca puedes encontrar variedad de libros que te pueden interesar.</p>
        <!-- Añade la clase mx-auto para centrar el carousel -->
        <div id="carouselExampleControls" class="carousel slide mx-auto" data-bs-ride="carousel" style="width: 50%;">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Img/imagen6.jpg" class="d-block w-100" alt="100">
                </div>
                <div class="carousel-item">
                    <img src="Img/Libros-gratis-Android.jpg" class="d-block w-100" alt="100">
                </div>
                <div class="carousel-item">
                    <img src="Img/imagen5.jpg" class="d-block w-100" alt="100">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <!-- Agrega el enlace al script de Bootstrap y a jQuery (requerido por Bootstrap) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>

</html>
