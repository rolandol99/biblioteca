<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seleccionar Imágenes</title>
    <link rel="stylesheet" href="View/miestilo.css">
    <style>
    body {
        text-align: center;
        margin: 20px; /* Ajusta el margen según sea necesario */
    }

    table {
        width: 60%; /* Ajusta el ancho de la tabla según sea necesario */
        margin: 0 auto; /* Centra la tabla en la página */
        border-collapse: collapse; /* Combina los bordes de las celdas */
    }

    th, td {
        padding: 10px; /* Ajusta el espaciado interno de las celdas */
        text-align: center; /* Centra el texto en las celdas */
    }
</style>
</head>

<body>
    <h1>Seleccione su opción</h1>

    <table border="1">
        <thead>
            <tr>
                <th>Listar Datos ingresados</th>
                <th>Seleccionar</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="Img/libros.jpg" alt="Imagen 1" width="100" height="100"></td>
                <td><a href="index.php?action=mostrarLibro">Listar libros</a></td>
            </tr>
            <tr> 
                <td><img src="Img/Imagen5.jpg" alt="Imagen 2" width="100" height="100"></td>
                <td><a href="index.php?action=mostrarPrestamo">Listar Prestamos</a></td>
            </tr>
            <!-- Agrega más filas según sea necesario -->
        </tbody>
    </table>

</body>

</html>
