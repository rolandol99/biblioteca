<?php
    use Controller\BiblioController;

    $categoria = new BiblioController;

    $registro = $categoria->editarCate(); //trae los campos de BD

    $categoria->actualizarCate(); //Envia los nuevos datos a la BD

?>
<link rel="stylesheet" href="View/miestilo.css"> 
<H1>EDITAR CATEGORIA</H1>

<form method="POST">


<div class="form-group">
    <div class="row mb-3">
        <div class="col-2"><label>estantería</label></div>
        <div class="col-10"><input class="form-control" type="text" name="estante" value="<?php echo $registro['estante']; ?>" required></div>
    </div>
</div>


<div class="form-group">
    <div class="row">
        <div class="col-2"><label>sección</label></div>
        <div class="col-10"><input type="text" class="form-control" name="seccion" value="<?php echo $registro['seccion']; ?>" ></div>
    </div>
</div>

<input type="hidden" name="idCategoria" value="<?php echo $registro['id'];?>">

<div class="form-group">
    <div class="row mt-3">
        <button type="submit" class="btn btn-primary">Actualizar</button>
        <br><BR>
    </div>
</div>

<div class="form-group">
    <div class="row mt-3">
           <!-- Botón de Cancelar -->
     <div class="col-2"><a href="index.php?action=veringreso" class="btn btn-secondary">Cancelar</a></div>
     </div>
</div>
</form>