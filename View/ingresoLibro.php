
<?php require_once "Model\Conexion.php"; ?>



<link rel="stylesheet" href="View/miestilo.css"> 

<h2>Ingresar Libro</h2>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
<div class="form-group">
    <div class="row mb-3">
        <div class="col-2"><label>Título: </label></div>
        <div class="col-10"><input class="form-control" type="text" name="titulo" required><br>

    </div>
        Género:
        <select name="genero">
        
        <?php while ($row = $resultGeneros->fetch_assoc()) : ?>
            <option value="<?php echo $row["genero_id"]; ?>"><?php echo $row["nombre"]; ?></option>
        <?php endwhile; ?>
    </select><br>
    Editorial:
    <select name="editorial">
        <?php while ($row = $resultEditoriales->fetch_assoc()) : ?>
            <option value="<?php echo $row["editorial_id"]; ?>"><?php echo $row["nombre"]; ?></option>
        <?php endwhile; ?>
    </select><br>
    Autor:
    <select name="autor">
        <?php while ($row = $resultAutores->fetch_assoc()) : ?>
            <option value="<?php echo $row["autor_id"]; ?>"><?php echo $row["nombre_autor"]; ?></option>
        <?php endwhile; ?>
    </select><br>
    <div class="form-group">
            <div class="row mt-3">
                <input type="submit" value="Ingresar Libro">
            </div>
    
</form>
