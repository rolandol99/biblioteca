<?php
    use Controller\BiblioController;
    $inscripcion = new BiblioController();
    
    $registro = $inscripcion->borrarCate(); // Borra el registro completo de la BD
    
    $inscripcion->confirmarBorrarCate();
?>
<link rel="stylesheet" href="View/miestilo.css"> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Producto</title>

</head>
<body>
    <div class="container">
        <h1>ELIMINAR PRODUCTO</h1>
        <form method="post">
            <table>
                <thead>
                    <tr>
                        <th>ESTANTERIA</th>
                        <th>SECCION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombre</td>
                        <td><?php echo $registro['estante']; ?></td>
                    </tr>
                    <tr>
                        <td>Categoría</td>
                        <td><?php echo $registro['seccion']; ?></td>
                    </tr>
                    
                </tbody>
            </table>

            <h6>¿Seguro que quiere borrar registro?</h6>

            <input type="hidden" name="idCategoria" value="<?php echo $registro['id']; ?>">

            <button type="submit" class="btn btn-primary">Borrar</button>
            
            <!-- Botón de Cancelar -->
            <a href="index.php?action=veringreso" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
