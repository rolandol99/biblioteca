<?php

    use Controller\BiblioController;
    $categoria = new BiblioController();

?>
<link rel="stylesheet" href="View/miestilo.css"> 
<h1>INGRESO CATEGORIAS</h1>

<div class="container">

    <form method="POST">


        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>estante</label></div>
                <div class="col-10"><input class="form-control" type="text" name="estante" required></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Categoría</label></div>
                <div class="col-10"><input type="text" class="form-control" name="seccion" required></input></div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-primary">Enviar</button>
            </div>

            <div class="row mt-1">
                <!-- Botón de Cancelar -->
            <a href="index.php?action=ingreso" class="btn btn-secondary">Nuevo Ingreso</a>
            </div>

        </div>
    </form>



        <?php
        $resultado = $categoria->ingresoCate();
            if($resultado == "guardado"){
                echo "<div class='alert alert-success mt-5' role='alert'>
                        Ingresado satisfactoriamente
                     </div>";
            }elseif($resultado == "error"){
                echo "<div class='alert alert-danger mt-5' role='alert'>
                        Error Guardardao
                     </div>";
            }
        ?>

</div>