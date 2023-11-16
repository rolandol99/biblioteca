<?php

use Controller\BiblioController;

$prestamo = new BiblioController;
$listado = $prestamo->mostrarPresta();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="footer.css">

</head>

<body>

    <div id="container-fluid">
        <h1>LIBROS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Título</th>
                    <th>Persona</th>
                    <th>Fecha Prestamo</th>
                    <th>Fecha Devolución</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listado as $row => $item) : ?>
                    <tr>
                        <td> <?php echo $item["prestamo_id"]; ?></td>
                        <td> <?php echo $item["titulo"]; ?></td>
                        <td> <?php echo $item["persona"]; ?></td>
                        <td> <?php echo $item["fecha_prestamo"]; ?></td>
                        <td> <?php echo $item["fecha_devolucion"]; ?></td>
                        <td>
                            <a href='index.php?action=editarAutor&idAutor=<?php echo $item['id']; ?>'>Editar</a>
                            <a href='index.php?action=eliminarAutor&idAutor=<?php echo $item['id']; ?>'>Eliminar</a>
                        <img src="Img/portada.jpg" alt="" height=100 width=100 >
                        </td>
                    </tr>
                    
                <?php endforeach; ?>
                
               
            </tbody>
        </table>
             
    </div>

</body>

</html>
