<?php

use Controller\BiblioController;

$libros = new BiblioController;
$listado = $libros->mostrarLib();
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
                    <th>Genero</th>
                    <th>Editorial</th>
                    <th>Autor</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listado as $row => $item) : ?>
                    <tr>
                        <td> <?php echo $item["libro_id"]; ?></td>
                        <td> <?php echo $item["titulo"]; ?></td>
                        <td> <?php echo $item["genero"]; ?></td>
                        <td> <?php echo $item["editorial"]; ?></td>
                        <td> <?php echo $item["autor"]; ?></td>
                        <td>
                            <a href='index.php?action=editarAutor&idAutor=<?php echo $item['id']; ?>'>Editar</a>
                            <a href='index.php?action=eliminarAutor&idAutor=<?php echo $item['id']; ?>'>Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            
            </tbody>
        </table>
    </div>
    
</body>

</html>
