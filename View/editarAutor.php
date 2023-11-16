<?php
    use Controller\BiblioController;

    $autores = new BiblioController;

    $registro = $autores->editarAut(); //trae los campos de BD

    $autores->actualizarAut(); //Envia los nuevos datos a la BD

?>
<link rel="stylesheet" href="View/miestilo.css"> 
<H1>EDITAR AUTOR</H1>

<form method="POST">


<div class="form-group">
    <div class="row mb-3">
        <div class="col-2"><label>Nombres</label></div>
        <div class="col-10"><input class="form-control" type="text" name="nombre" value="<?php echo $registro['nombre']; ?>" required></div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-2"><label>Apellidos</label></div>
        <div class="col-10"><input type="text" class="form-control" name="apellido" value="<?php echo $registro['apellido']; ?>" ></div>
    </div>
</div>

<input type="hidden" name="idAutor" value="<?php echo $registro['id'];?>">

<div class="form-group">
    <div class="row mt-3">
        <button type="submit" class="btn btn-primary">Actualizar Autor</button>
        <br><BR>
    </div>
</div>

<div class="form-group">
    <div class="row mt-3">
           <!-- Botón de Cancelar -->
     <div class="col-2"><a href="index.php?action=verAutor" class="btn btn-secondary">Cancelar</a></div>
     </div>
</div>
</form>