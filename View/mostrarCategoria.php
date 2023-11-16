<?php
//require_once('autoload.php');
//require_once("Navbar.php");
//require_once("footer.php");

use Controller\BiblioController;

$categoria = new BiblioController;
$listado = $categoria->mostrarCate();
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
        <h1>CATEGORIAS</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Estantería</th>
                    <th>Sección</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listado as $row => $item) : ?>
                    <tr>
                        <td><?php echo $item['id']; ?></td>
                        <td><?php echo $item['estante']; ?></td>
                        <td><?php echo $item['seccion']; ?></td>
                        <td>
                            <a href='index.php?action=editarCategoria&idCategoria=<?php echo $item['id']; ?>'>Editar</a>
                            <a href='index.php?action=eliminarCategoria&idCategoria=<?php echo $item['id']; ?>'>Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</body>

</html>
