<?php
    use Controller\BiblioController;
    $autores = new BiblioController();
    
    $registro = $autores->borrarAut(); // Borra el registro completo de la BD
    
    $autores->confirmarBorrarAut();
?>
<link rel="stylesheet" href="View/miestilo.css"> 
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Autores</title>

</head>
<body>
    <div class="container">
        <h1>ELIMINAR AUTOR</h1>
        <form method="post">
            <table>
                <thead>
                    <tr>
                        <th>NOMBRES</th>
                        <th>APELLIDOS</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Nombres</td>
                        <td><?php echo $registro['nombre']; ?></td>
                    </tr>
                    <tr>
                        <td>Apellidos</td>
                        <td><?php echo $registro['apellido']; ?></td>
                    </tr>
                    
                </tbody>
            </table>
            <br>
            <h6>¿Seguro que quiere borrar registro?</h6>

            <input type="hidden" name="idAutor" value="<?php echo $registro['id']; ?>">

            <button type="submit" class="btn btn-primary">Borrar</button>
            
            <!-- Botón de Cancelar -->
            <a href="index.php?action=verAutor" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
</body>
</html>
